<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
         return view("home",compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view("home");
    // }

    // public function home()
    // {
    //     $hotels = Hotel::all();
    //     return view("home",compact('hotels'));
    // }

    public function add()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hotel::create($request->all());
        return redirect()->route("home");
    }

    // public function store(Request $request)
    // {
    //     $hotels = Hotel::create($request->all()); return redirect()->route('home')->with('success ',' Data Berhasi di Tambahkan. ');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $hotels = Hotel::find($id);
        return view('detail', compact ('hotels'));
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
        $hotel = Hotel::find($id);
        $hotel->update($request->all());
        return redirect()->route('home');
    }

    public function tampilkandata($id)
    {
        $hotels = Hotel::find($id);
        return view("edit",compact('hotels'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $hotels = Hotel::find($id);
        // $hotels->delete();
        // return redirect()->route('home')->with('success', ' Data berhasil di hapus');
    }
    public function delete($id)
    {
        $hotels = Hotel::find($id);
        $hotels->delete();
        return redirect()->route('home')->with('success', ' Data berhasil di hapus');
    }
    
}
