<?php

namespace App\Http\Controllers\Pages;

use App\Model\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function newsletter (Request $request) {
        $this->validate($request, [
           'emails' => 'required|email|unique:newsletters'
        ]);
        Newsletter::create($request->all());
        Session::flash('success', 'Félicitation vous vous etes inscrit avec succès');
        return redirect()->back();
    }
}
