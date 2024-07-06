<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
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
        return view('partials.add-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $this->validate($request, [
                'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nama_lengkap'      => 'required',
                'email'             => 'required|email',
                'telepon'           => 'required',
                'alamat'            => 'required',
            ]);
    
            $image = $request->file('photo');
            $fileName = $image->getClientOriginalName();
            $image->storeAs('public/avatars', $fileName);
    
            Pegawai::create([
                'photo'             => $fileName,
                'nama_lengkap'      => $request->nama_lengkap,
                'email'             => $request->email,
                'telepon'           => $request->telepon,
                'alamat'            => $request->alamat,
            ]);
    
            return redirect()->back()->with('success', 'Data pegawai berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $pegawai = Pegawai::findOrFail($id);
            $this->validate($request, [
                'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nama_lengkap'      => 'required',
                'email'             => 'required|email',
                'telepon'           => 'required',
                'alamat'            => 'required',
            ]);

            if  ($request->hasFile('photo')){
                
                $image = $request->file('photo');
                $fileName = $image->getClientOriginalName();
                $image->storeAs('public/avatars', $fileName);

                Storage::delete('public/avatars/'.$pegawai->photo);
        
                $pegawai->update([
                    'photo'             => $fileName,
                    'nama_lengkap'      => $request->nama_lengkap,
                    'email'             => $request->email,
                    'telepon'           => $request->telepon,
                    'alamat'            => $request->alamat,
                ]);
            } else {
                $pegawai->update([
                    'nama_lengkap'      => $request->nama_lengkap,
                    'email'             => $request->email,
                    'telepon'           => $request->telepon,
                    'alamat'            => $request->alamat,
                ]);
            }
    
    
            return redirect()->back()->with('success', 'Data pegawai berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Pegawai::findOrFail($id);

        Storage::delete('public/avatars/'. $data->photo);
        $data->delete();
        return redirect()->back()->with('success', 'Data pegawai berhasil dihapus');
    }
}
