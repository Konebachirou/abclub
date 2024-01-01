<?php

namespace App\Http\Controllers\abclub;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}