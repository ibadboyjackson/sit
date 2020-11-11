<?php

namespace App\Http\Controllers\Pages;

use App\Model\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function index () {
        return view('pages.jobs');
    }

    public function job (Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:jobs',
            'message' => 'required|max:600|min:2',
            'subject' => 'required|string'
        ]);

        Job::create($request->all());
        Session::flash('success', "Merci d'avoir postulé nous vous contacterons sous peu");
        return redirect()->back();
    }
}
