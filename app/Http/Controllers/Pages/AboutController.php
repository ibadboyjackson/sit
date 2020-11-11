<?php

namespace App\Http\Controllers\Pages;

use App\Model\About;
use App\Model\Construction;
use App\Model\Member;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index() {

        return view('pages.about', [

            'teams' => Team::all(),
            'members' => Member::all(),
            'constructions' => Construction::all(),

            ])->with('abouts', About::all());
    }
}
