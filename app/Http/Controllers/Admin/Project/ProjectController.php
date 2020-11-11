<?php

namespace App\Http\Controllers\Admin\Project;

use App\Model\Project;
use App\Model\Projector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(5);
        $projectors = Projector::all();
        return view('admin.pages.project.index', compact('projects', 'projectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.project.project.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image'
        ]);

        $projet = new Project();
        $projet->title = $request->get('title');
        $projet->category = $request->get('category');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(800, 700)->save($location);
            $projet->image = $filename;
        }

        $projet->save();
        Session::flash('success', 'Projet crée avec succès');
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.pages.project.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image'
        ]);

        $projet = Project::find($id);
        $projet->title = $request->get('title');
        $projet->category = $request->get('category');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(800, 700)->save($location);
            $projet->image = $filename;
        }

        $projet->save();
        Session::flash('success', 'Projet crée avec succès');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        Session::flash('success', 'Projet supprimé avec succès');
        return redirect()->route('project.index');
    }
}
