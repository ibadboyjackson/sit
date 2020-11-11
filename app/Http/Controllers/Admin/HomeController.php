<?php

namespace App\Http\Controllers\Admin;

use App\Model\Beta;
use App\Model\Construction;
use App\Model\Member;
use App\Model\Seattle;
use App\Model\Service;
use App\Model\Slide;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index () {
        return view('admin.pages.home.index', [
            'betas' => Beta::all(),
            'slides' => Slide::all(),
            'services' => Service::all(),
            'seattle' => Seattle::all(),
            'constructions' => Construction::all(),
            'teams' => Team::all(),
            'members' => Member::all(),
        ]);
    }
}
