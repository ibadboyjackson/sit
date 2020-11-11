<?php

namespace App\Http\Controllers\Pages;

use App\Model\Beta;
use App\Model\Construction;
use App\Model\Member;
use App\Model\Post;
use App\Model\Project;
use App\Model\Projector;
use App\Model\Seattle;
use App\Model\Service;
use App\Model\Slide;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home', [
            'slides' => Slide::all(),
            'services' => Service::all(),
            'seattles' => Seattle::all(),
            'betas' => Beta::all(),
            'teams' => Team::all(),
            'members' => Member::all(),
            'constructions' => Construction::all(),
            'projects' => Project::all(),
            'projectors' => Projector::all(),
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(3)
        ]);
    }
}
