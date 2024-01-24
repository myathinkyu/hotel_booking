<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.about-table', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.about-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = '';

        if($request->hasFile('file')) 
        {
        $file = $request->file('file');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path("/assets/images/about/"), $filename);
        }
        
        About::create([
            'name'=>$request->get('name'),
            'description'=> $request->get('description'),
            'image' =>  $filename,
        ]);

        return redirect()->route('about.detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $about = About::all();
        return view('admin.about.about-show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = About::findOrFail($id);
        return view('admin.about.about-edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail = About::findOrFail($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/assets/images/about/'), $filename);
            //dd($filename);

            $oldImage = $detail->image;
            if (file_exists(public_path('/assets/images/about/') . $oldImage)) {
                unlink(public_path('/assets/images/about/') . $oldImage);
            }
        } else {
            $filename = $detail->image;
        }
      
        $detail->update([
            'name'=>$request->get('name'),
            'description'=> $request->get('description'),
            'image' =>  $filename,
        ]);
            return redirect()->route('about.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
