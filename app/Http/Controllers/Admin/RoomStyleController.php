<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomStyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $rooms = Room::all();
        return view('admin.room.room-table', compact('rooms'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.room.room-create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // $validatedData = $request->validate([
        //     'type_id' => 'required|exists:types,id', 
        //     'price' => 'required|numeric',
        //     'persons' => 'required|numeric',
        //     'state' => 'required|in:0,1',
        //     'description' => 'required|string',
        //     'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        // ]);

        // $filename = '';

        // if($request->hasFile('file')) 
        // {
        // $file = $request->file('file');
        // $filename = uniqid() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/assets/images/room_style/"), $filename);
        // }
        
        // Room::create([
        //     'type_id'=>$request->get('type_id'),
        //     'price'=> $request->get('price'),
        //     'persons'=> $request->get('persons'),
        //     'state'=> $request->get('state'),
        //     'description'=> $request->get('description'),
        //     'image' =>  $filename,
        // ]);

        // $room = new Room($validatedData);
        // $room->save();

        $validatedData = $request->validate([
            'type_id' => 'required|exists:types,id', 
            'price' => 'required|numeric',
            'persons' => 'required|numeric',
            'state' => 'required|in:0,1',
            'description' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        
        $filename = '';
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            $file->move(public_path("/assets/images/room_style/"), $filename);
        }
        
        $room = new Room([
            'type_id' => $request->get('type_id'),
            'price' => $request->get('price'),
            'persons' => $request->get('persons'),
            'state' => $request->get('state'),
            'description' => $request->get('description'),
            'image' => $filename,
        ]);
        
    
        $room->save();

        return redirect()->route('room.style');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.room.room-show', compact('rooms', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Room::findOrFail($id);
        $types = Type::all();
        return view('admin.room.room-edit', compact('rooms', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $rooms = Room::findOrFail($id);
        // $rooms->type_id = $request->input('type_id');
        // $rooms->price = $request->input('price');
        // $rooms->persons = $request->input('persons');
        // $rooms->state = $request->input('state');
        // $rooms->description = $request->input('description');
       

        // if($request->hasFile('file')) 
        // {    
        //     $file = $request->file('file');
        //     $filename = uniqid() . "_" . $file->getClientOriginalName();
        //     $file->move(public_path("/assets/images/room_style/"), $filename);
        //     $rooms->image = $filename;
        // }
        
        // $rooms->save();
        // return redirect()->route('room.list');


        $rooms = Room::findOrFail($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/assets/images/room_style/'), $filename);
            //dd($filename);

            $oldImage = $rooms->image;
            if (file_exists(public_path('/assets/images/room_style/') . $oldImage)) {
                unlink(public_path('/assets/images/room_style/') . $oldImage);
            }
        } else {
            $filename = $rooms->image;
        }
      
        $rooms->update([
            'type_id'=>$request->get('type_id'),
            'price'=> $request->get('price'),
            'persons'=> $request->get('persons'),
            'state'=> $request->get('state'),
            'description'=> $request->get('description'),
            'image' =>  $filename,
        ]);
            return redirect()->route('room.table');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Room::findOrFail($id);
        $list->delete();
        return redirect()->route('room.table');
    }
}
