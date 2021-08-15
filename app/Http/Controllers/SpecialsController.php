<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Special;
use App\Models\Create;

class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = Special::All();
        return view('admin.specials.index', ['specials' => $specials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specials = Special::All();
        return view('admin.specials.create', ['specials' => $specials]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request::All();
        // dd($input);
        $special = new Special();
        $special->name = $input['name'];
        $special->description = $input['description'];
        $special->brand = $input['brand'];
        $special->was_price = $input['was_price'];
        $special->current_price = $input['current_price'];

        $special->save();
        return redirect('admin/specials');
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
        $special = Special::where('id', $id)->first();
        // dd($special);
        return view('admin.specials.edit', ['special' => $special]);
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
        $input = $request::All();
        // dd($input);
        $special = Special::where('id', $id)->first();
        $special->name = $input['name'];
        $special->description = $input['description'];
        $special->brand = $input['brand'];
        $special->was_price = $input['was_price'];
        $special->current_price = $input['current_price'];

        // dd($special)->first();
        $special->save();
        return redirect('admin/specials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Special::where('id', $id)->delete();
        return redirect('admin/specials');
    }
}
