<?php

namespace App\Http\Controllers\Admin\Job;

use App\Model\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function job () {
        return view('admin.pages.job.index')->with('jobs', Job::orderBy('created_at', 'DESC')->paginate(10));
    }

    public function message ($id) {
        $job = Job::find($id);

        if( $job) {
            return view('admin.pages.job.job', compact('job'));
        }
        return abort(404);
    }
}
