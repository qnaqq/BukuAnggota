<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('bukuanggota', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createbukuanggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $member = new Member;
        // $member->nama = $request->nama;
        // $member->nim = $request->nim;
        // $member->fakultas = $request->fakultas;
        // $member->prodi = $request->prodi;
        // $member->angkatan = $request->angkatan;
        // $member->lulusan = $request->lulusan;
        // $member->sejak = $request->sejak;
        // $member->alasan = $request->alasan;

        // Member::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'fakultas' => $request->fakultas,
        //     'prodi' => $request->prodi,
        //     'angkatan' => $request->angkatan,
        //     'lulusan' => $request->lulusan,
        //     'sejak' => $request->sejak,
        //     'alasan' => $request->alasan
        // ]);

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:12',
            'fakultas' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required|size:4',
            'lulusan' => 'size:4',
            'sejak' => 'required',
            'alasan' => 'required'
        ]);

        Member::create($request->all()); 
        return redirect('/admin')->with('pesan', 'Data Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('showbukuanggota', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('editmember', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        Member::where('id', $member->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'fakultas' => $request->fakultas,
                    'prodi' => $request->prodi,
                    'angkatan' => $request->angkatan,
                    'lulusan' => $request->lulusan,
                    'sejak' => $request->sejak,
                    'alasan' => $request->alasan
                ]);
        
        return redirect('/admin')->with('pesan2', 'Data Telah Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Member::destroy($member->id);
        return redirect('/admin')->with('pesan1', 'Data Telah Dihapus!');
    }
}
