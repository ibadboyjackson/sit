<?php

namespace App\Http\Controllers\Admin\Newsletter;

use App\Model\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function newsletter () {
        return view('admin.pages.newsletter.news')->with('newsletters', Newsletter::orderBy('created_at', 'DESC')->paginate(10));
    }
}
