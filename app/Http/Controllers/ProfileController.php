<?php

namespace App\Http\Controllers;

use App\Models\DetailEnrolledCourse;
use App\Models\EnrolledCourse;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $enrolledCourse = EnrolledCourse::where('user_id', $userId)->get();
        $user = User::find($userId);
        $enrolled = EnrolledCourse::where('user_id', $userId)->get();

        $listScore = [];
        foreach ($enrolled as $value) {
            $detail = DetailEnrolledCourse::where('enrolled_course_id', $value->id)->where('status', 1)
                ->whereHas('content', function ($query) {
                    $query->where('type', 4);
                })->get();
            foreach ($detail as $item) {
                $data = [
                    'taken_date' => Carbon::parse($item->started_at)->format('d-m-Y'),
                    'score' => $item->testScore()->first()->total_score,
                    'title' => $item->content->title,
                ];
                array_push($listScore, $data);
            }
        }
        return view('profile', compact('enrolledCourse', 'user', 'listScore'));
    }

    public function reportTime()
    {
        $report = [
            [
                'day' => 'Senin',
                'duration' => 0,
            ],
            [
                'day' => 'Selasa',
                'duration' => 0,
            ],
            [
                'day' => 'Rabu',
                'duration' => 0,
            ],
            [
                'day' => 'Kamis',
                'duration' => 0,
            ],
            [
                'day' => 'Jumat',
                'duration' => 0,
            ],
            [
                'day' => 'Sabtu',
                'duration' => 0,
            ],
            [
                'day' => 'Minggu',
                'duration' => 0,
            ],
        ];

        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();
        $period = CarbonPeriod::create($startDate, $endDate);
        $dates = $period->toArray();
        $userId = auth()->user()->id;

        $duration = 0;
        foreach ($dates as $key => $date) {
            $duration = DetailEnrolledCourse::where('enrolled_course_id', $userId)
                ->where('status', 1)
                ->where('started_at', '>=', $date->format('Y-m-d H:i:s'))
                ->where('started_at', '<=', $date->endOfDay()->format('Y-m-d H:i:s'))
                ->sum('duration');
            $report[$key]['duration'] = intval($duration / 60);
        }
        return response()->json($report, 200);
    }
}
