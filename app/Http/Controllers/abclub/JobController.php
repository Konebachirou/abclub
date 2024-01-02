<?php

namespace App\Http\Controllers\abclub;

use App\Models\Job;
use App\Models\UserJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function jobs()
    {
        $ongletActif = 'jobs';
        return view('users.jobs.jobs', ['ongletActif' => $ongletActif]);
    }

    public function jobsDetail(string $slug)
    {
        $ongletActif = 'jobs';
        $job = Job::where('slug', $slug)->first();
        return view('users.jobs.jobs_detail', ['ongletActif' => $ongletActif, 'job' => $job]);
    }

    public function userJob(Request $request)
    {
        $job = Job::where('id', $request->job_id)->first();
        UserJob::create([
            'user_id' => Auth::user()->id,
            'job_id' => $job->id
        ]);

        return redirect($job->job_link);
    }
}
