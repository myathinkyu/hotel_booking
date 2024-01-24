<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationSystemController extends Controller
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
        //
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
            'room_id' => 'required|exists:rooms,id',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date',
        ]);

        // Assuming you are using user authentication
        $user = Auth::user();

        Reservation::create([
            'room_id' => $request->input('room_id'),
            'user_id' => $user->id,
            'checkin_date' => $request->input('checkin_date'),
            'checkout_date' => $request->input('checkout_date'),
        ]);

        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rooms = Room::with('type')->get();
        
        // $rooms = Room::where('type_id', 7)->get();
        // $type = Room::where('type_id', 1)->get();

        return view('users.choose_room' , compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function chooseRoom()
    {
        return view('users.choose_room');
    }

    public function reservation()
    {
        return view('users.reservation');
    }
}
