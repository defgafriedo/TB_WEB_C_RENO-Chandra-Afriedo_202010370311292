<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class jeniscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Jenis::paginate(5);

        return view('jenis.jenisv', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_identity = Jenis::pluck('jenis_buku');
        return view('jenis.create', compact('list_identity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_buku' => 'required|string|max:255',
        ]);
        $post = Jenis::create($request->all());
        return redirect('/jenis');
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
        $book = Jenis::findOrFail($id);
        $list_identity = Jenis::pluck('jenis_buku', 'id');
        return view('jenis.edit', compact('list_identity','book'));
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
        $book = Jenis::find($id);
        $this->validate($request, [
            'jenis_buku' => 'required|string|max:255',
        ]);
        
        $book->update($request->all());
        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Jenis::find($id)->delete();

        return redirect('/jenis')->with(
            'error',
            'Berhasil Hapus Buku !!'
        );
        return redirect('/jenis');
    }
}
