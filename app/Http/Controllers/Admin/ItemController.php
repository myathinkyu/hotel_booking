<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.item-table', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item.item-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required|in:breakfast,lunch,dinner,drink',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = new Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->category = $request->category;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = uniqid() . "_" . $file->getClientOriginalName();
            $file->move(public_path("/assets/images/restaurants/"), $fileName);
            $item->image = $fileName;
        }

        $item->save();

        return redirect()->route('item.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Item::findOrFail($id);
        return view('admin.item.item-edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Item::findOrFail($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/assets/images/restaurants/'), $filename);
            //dd($filename);

            $oldImage = $food->image;
            if (file_exists(public_path('/assets/images/restaurants/') . $oldImage)) {
                unlink(public_path('/assets/images/restaurants/') . $oldImage);
            }
        } else {
            $filename = $food->image;
        }
      
        $food->update([
            'name'=>$request->get('name'),
            'price' => $request->get('price'),
            'description'=> $request->get('description'),
            'category' => $request->get('category'),
            'image' =>  $filename,
        ]);
            return redirect()->route('item.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
