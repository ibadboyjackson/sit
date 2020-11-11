<?php

namespace App\Http\Controllers\Admin\Home;

use App\Model\Seattle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Image;

class SeattleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.home.seattle.add');
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
            'content' => 'required|string',
        ]);

        $seattle = new Seattle();
        $seattle->title = $request->get('title');
        $seattle->content = $request->get('content');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = storage_path('upload/' . $filename);
            Image::make($image)->fit(1500, 844)->save($location);
            $seattle->image = $filename;
        }

        $seattle->save();
        Session::flash('success', 'Service crée avec succès');
        return redirect()->route('admin.home');
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
        $seattle = Seattle::find($id);
        return view('admin.pages.home.seattle.edit', compact('seattle'));
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
            'content' => 'required|string',
        ]);

        $seattle = Seattle::find($id);
        $seattle->title = $request->get('title');
        $seattle->content = $request->get('content');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = storage_path('upload/' . $filename);
            Image::make($image)->fit(1500, 844)->save($location);
            $seattle->image = $filename;
        }

        $seattle->save();
        Session::flash('success', 'Service modifié avec succès');
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
