<?php

namespace App\Http\Controllers;

use App\Models\balasan;
use Illuminate\Http\Request;

class balasanControler extends Controller
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
        $balasan = $request->all();
        balasan::create($balasan);
        // session()->flash('success', 'Data added successfully!');
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\balasan  $balasan
     * @return \Illuminate\Http\Response
     */
    public function show(balasan $balasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\balasan  $balasan
     * @return \Illuminate\Http\Response
     */
    public function edit(balasan $balasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\balasan  $balasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, balasan $balasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\balasan  $balasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(balasan $balasan)
    {
        //
    }
}
