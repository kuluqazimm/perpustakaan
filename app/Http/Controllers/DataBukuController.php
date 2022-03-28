<?php

namespace App\Http\Controllers;

use App\DataBuku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_bukus = DataBuku::all();
        return view ('buku.index', [
            'data_bukus' => $data_bukus 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_bukus = DataBuku::all();
        return view ('buku.create', [
            'data_bukus' => $data_bukus 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(),[
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'jumlah_buku' => 'required|integer',
            'deskripsi' => 'required|string',
        ])->validate();

        $data_buku = new DataBuku($validatedData);
        $data_buku->save();

        return redirect(route('daftarBuku'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataBuku  $dataBuku
     * @return \Illuminate\Http\Response
     */
    public function show(DataBuku $dataBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataBuku  $dataBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(DataBuku $data_buku)
    {
        $data_bukus = DataBuku::all();
        return view('buku.edit',[
            'data_bukus' => $data_bukus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataBuku  $dataBuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataBuku $data_buku)
    {
        $validatedData = validator($request->all(),[
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'jumlah_buku' => 'required|integer',
            'deskripsi' => 'required|string',
        ])->validate();

        $data_buku->judul = $validatedData['judul'];
        $data_buku->pengarang = $validatedData['pengarang'];
        $data_buku->penerbit =$validatedData['penerbit'];
        $data_buku->tahun_terbit =$validatedData['tahun_terbit'];
        $data_buku->jumlah_buku =$validatedData['jumlah_buku'];
        $data_buku->deskripsi =$validatedData['deskripsi'];
        $data_buku->save();

        return redirect(route('daftarBuku'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataBuku  $dataBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataBuku $data_buku)
    {
        $data_buku->delete();
        return redirect(route('daftarBuku'));
    }
}
