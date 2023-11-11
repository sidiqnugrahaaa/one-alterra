<?php

namespace App\Http\Controllers;

use App\Models\Blueprint;
use App\Models\Content;
use App\Models\DetailEnrolledCourse;
use App\Models\EnrolledCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function detailCourse()
    {
        $detailCourse = Blueprint::where('course_id', 1)->get();
        $enrolled = null;
        if (Auth::check()) {
            $enrolled = EnrolledCourse::where('user_id', auth()->user()->id)->where('course_id', 1)->first();
        }
        return view('detail_course', compact('detailCourse', 'enrolled'));
    }

    public function paymentCourse()
    {
        return view('payment');
    }

    public function enrollCourse(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'provinsi' => 'required',
            'hope' => 'required',
            'payment_method' => 'required',
        ]);

        $enrolled = new EnrolledCourse();
        $enrolled->user_id = auth()->user()->id;
        $enrolled->course_id = 1;
        $enrolled->full_name = $request->full_name;
        $enrolled->email = $request->email;
        $enrolled->phone_number = $request->phone_number;
        $enrolled->city = $request->city;
        $enrolled->provinsi = $request->provinsi;
        $enrolled->hope = $request->hope;
        $enrolled->payment_method = $request->payment_method;
        $enrolled->save();

        $courseId = 1;
        $contents = Content::whereIn('syllabus_id', function ($query) use ($courseId) {
            $query->select('id')
                ->from('syllabus')
                ->whereIn('blueprint_id', function ($query) use ($courseId) {
                    $query->select('id')
                        ->from('blueprints')
                        ->where('course_id', $courseId);
                });
        })->pluck('id');

        foreach ($contents as $key => $item) {
            $detailEnrolled = new DetailEnrolledCourse();
            $detailEnrolled->enrolled_course_id = $enrolled->id;
            $detailEnrolled->content_id = $item;
            $detailEnrolled->status = 0;
            $detailEnrolled->created_at = now();
            $detailEnrolled->updated_at = now();
            $detailEnrolled->save();
        }

        return redirect()->route('profile');
    }
}
