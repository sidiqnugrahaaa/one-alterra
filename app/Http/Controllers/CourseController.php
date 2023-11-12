<?php

namespace App\Http\Controllers;

use App\Models\Blueprint;
use App\Models\DetailEnrolledCourse;
use App\Models\EnrolledCourse;
use App\Models\TestQuestion;
use App\Models\TestTaken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index($id, $detail = null)
    {
        // check if user already enrolled
        $enrolled = EnrolledCourse::where('user_id', auth()->user()->id)->where('id', $id)->first();
        if (!$enrolled) {
            return redirect()->route('profile');
        }

        if ($enrolled->current_content_id == null || $detail == 'introduction') {
            $current = DetailEnrolledCourse::where('enrolled_course_id', $id)->orderBy('id', 'asc')->first();
            if ($detail == 'introduction') {
                $detail = $current->id;
            } else {
                $enrolled->current_content_id = $current->id;
                $current->started_at = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');
                $enrolled->save();
                $current->save();
                $detail = $current->id;
            }
        }

        $currentContent = DetailEnrolledCourse::find($detail);
        $detailCourse = Blueprint::where('course_id', 1)->get();

        switch ($currentContent->content->type) {
            case 1:
                return view('course.default', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
            case 2:
                return view('course.media', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
            case 3:
                return view('course.media', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
            case 4:
                return view('course.test', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
            case 5:
                return view('course.task', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
            case 6:
                return view('course.task', compact('detailCourse', 'enrolled', 'currentContent'));
                break;
        }
    }

    public function next($id, Request $request)
    {
        $detailEnrolled = DetailEnrolledCourse::find($id);
        $enrolled = EnrolledCourse::find($detailEnrolled->enrolled_course_id);
        $next = DetailEnrolledCourse::where('enrolled_course_id', $enrolled->id)->where('content_id', '>', $detailEnrolled->content_id)->orderBy('content_id', 'asc')->first();

        if ($detailEnrolled->status == 0) {
            $detailEnrolled->status = 1;
            $detailEnrolled->completed_at = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');
            $detailEnrolled->duration = Carbon::parse($detailEnrolled->started_at)->diffInSeconds(Carbon::parse($detailEnrolled->completed_at));
            $detailEnrolled->save();

            $enrolled->current_content_id = $next->id;
            $next->started_at = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

            $next->save();
            $enrolled->save();

            $detailCompleted = DetailEnrolledCourse::where('enrolled_course_id', $enrolled->id)->where('status', 1)->count();
            $allDetail = DetailEnrolledCourse::where('enrolled_course_id', $enrolled->id)->count();
            $enrolled->progress = round(($detailCompleted / $allDetail) * 100);
            $enrolled->save();
        }

        if ($next->content->type == 4 && $next->status == 0) {
            foreach ($next->content->contentTest->testQuestion as $value) {
                $taken = new TestTaken();
                $taken->detail_enrolled_course_id = $next->id;
                $taken->question_id = $value->id;
                $taken->status = 0;
                $taken->save();
            }
        }

        return redirect()->route('course.show', ['id' => $next->enrolled_course_id, 'detail' => $next->id]);
    }

    public function prev($id)
    {
        $current = DetailEnrolledCourse::find($id);
        $prev = $current->content->order == 1 ? $current : DetailEnrolledCourse::where('enrolled_course_id', $current->enrolled_course_id)->where('content_id', '<', $current->content_id)->orderBy('content_id', 'desc')->first();
        return redirect()->route('course.show', ['id' => $current->enrolled_course_id, 'detail' => $prev->id]);
    }

    public function submitTest(Request $request)
    {
        DB::beginTransaction();
        try {
            $enrolled = DetailEnrolledCourse::find($request->id_test);
            $testTaken = TestTaken::where('detail_enrolled_course_id', $enrolled->id)->get();
            foreach ($testTaken as $value) {
                $taken = TestTaken::find($value->id);
                if ($request->has('question_' . $value->question_id)) {
                    $taken->answer_a = $request->input('question_' . $value->question_id) == 'a' ? 1 : 0;
                    $taken->answer_b = $request->input('question_' . $value->question_id) == 'b' ? 1 : 0;
                    $taken->answer_c = $request->input('question_' . $value->question_id) == 'c' ? 1 : 0;
                    $taken->answer_d = $request->input('question_' . $value->question_id) == 'd' ? 1 : 0;

                    if ($value->testQuestion->key_answer_a) {
                        $taken->score = $taken->answer_a ? $value->testQuestion->score : 0;
                    } else if ($value->testQuestion->key_answer_b) {
                        $taken->score = $taken->answer_b ? $value->testQuestion->score : 0;
                    } else if ($value->testQuestion->key_answer_c) {
                        $taken->score = $taken->answer_c ? $value->testQuestion->score : 0;
                    } else if ($value->testQuestion->key_answer_d) {
                        $taken->score = $taken->answer_d ? $value->testQuestion->score : 0;
                    }
                } else {
                    $taken->score = 0;
                }
                $taken->status = 1;
                $taken->save();
            }
            $enrolled->status = 1;
            $enrolled->completed_at = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');
            $enrolled->duration = Carbon::parse($enrolled->started_at)->diffInSeconds(Carbon::parse($enrolled->completed_at));
            $enrolled->save();

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Test submitted successfully'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
