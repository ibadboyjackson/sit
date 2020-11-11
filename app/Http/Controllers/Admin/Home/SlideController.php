<?php

namespace App\Http\Controllers\Admin\Home;

use App\Model\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.home.slide.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image'
        ]);

        $slide = new Slide();
        $slide->title = $request->get('title');
        $slide->description = $request->get('description');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(1500, 844)->save($location);
            $slide->image = $filename;
        }

        $slide->save();
        Session::flash('success', 'Slide crée avec succès');
        return redirect()->route('admin.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.pages.home.slide.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image'
        ]);

        $slide = Slide::find($id);
        $slide->title = $request->get('title');
        $slide->description = $request->get('description');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(1500, 844)->save($location);
            $slide->image = $filename;
        }

        $slide->save();
        Session::flash('success', 'Slide modifié avec succès');
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
