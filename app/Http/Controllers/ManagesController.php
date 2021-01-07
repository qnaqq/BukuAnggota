<?php

namespace App\Http\Controllers;

use App\Manage;
use Illuminate\Http\Request;

class ManagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Manage::all();
        return view('kelolaAdmin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Manage::create($request->all());
        return redirect('/admin/manage')->with('pesan', 'Data Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function show(Manage $manage)
    {
        return view('showAdmin', compact('manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function edit(Manage $manage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manage $manage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manage $manage)
    {
        Manage::destroy($manage->id);
        return redirect('/admin/manage')->with('pesan1', 'Data Telah Dihapus!');
    }
}
