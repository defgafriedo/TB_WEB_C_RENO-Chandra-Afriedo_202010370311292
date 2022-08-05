<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class identitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Identity::paginate(5);

        return view('identity.identityv', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_identity = Identity::pluck('nama_identity');
        return view('identity.create', compact('list_identity'));
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
            'nama_identity' => 'required|string|max:255',
        ]);
        $post = Identity::create($request->all());
        return redirect('/identity');
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
        $book = Identity::findOrFail($id);
        $list_identity = Identity::pluck('nama_identity', 'id');
        return view('identity.edit', compact('list_identity','book'));
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
        $book = Identity::find($id);
        $this->validate($request, [
            'nama_identity' => 'required|string|max:255',
        ]);
        
        $book->update($request->all());
        return redirect('/identity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Identity::find($id)->delete();

        return redirect('/identity')->with(
            'error',
            'Berhasil Hapus Buku !!'
        );
        return redirect('/identity');
    }
}
