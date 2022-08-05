<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\Isbn;
use App\Models\Jenis;
use App\Models\Identity;
use Illuminate\Support\validator;

class BookProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'summary' => 'required|string',
            'price' => 'sometimes|numeric',
            'no_isbn' => 'required|string|max:255',
            'id_jenis' => 'required',
            'identity' => 'required',
        ]);
        $data = $request->only(
            'title',
            'writer',
            'summary',
            'price',
            'id_jenis',
            'identity'
        );
        $post = Books::create($request->all());
        $isbn = new Isbn;
        $isbn->no_isbn = $request->input('no_isbn');
        $post->isbn()->save($isbn);
        $post->identity()->attach($request->input('identity'));
        return redirect('/book')->with('success', 'Berhasil Menyimpan Judul Buku : ' . $request->get('title'));
    }
    public function index()
    {
        $book = Books::paginate(5);

        return view('product.productv', compact('book'));
    }
    public function indexs(Request $request)
    {
        $q = $request->get('q');
        $book = Books::where('title', 'LIKE', '%' . $q . '%')->orderBy('title')->paginate(5);
        return view('product.index', compact('book', 'q'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataJenisBuku = Jenis::pluck('jenis_buku', 'id');
        $list_identity = Identity::pluck('nama_identity', 'id');
        return view('product.create', compact('dataJenisBuku', 'list_identity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::findOrFail($id);
        return view('product.detail', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        $book->no_isbn = $book->isbn->no_isbn;
        $dataJenisBuku = Jenis::pluck('jenis_buku', 'id');
        $list_identity = Identity::pluck('nama_identity', 'id');
        return view('product.edit', compact('book', 'dataJenisBuku', 'list_identity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $book = Books::find($id);
        $this->validate($request, [
            'title' => 'required|string|max:255,',
            'writer' => 'required|string|max:255,',
            'summary' => 'required|string|max:255,',
            'no_isbn' => 'required|string|max:255,' . $book->id,
            'id_jenis' => 'required',
            'identity' => 'required',
        ]);
        $data = $request->only(
            'title',
            'writer',
            'summary',
            'id_jenis',
            'identity'
        );
        $book->update($request->all());
        $isbn = $book->isbn;
        $isbn->no_isbn = $request->input('no_isbn');
        $book->isbn()->save($isbn);
        $book->identity()->sync($request->input('identity'));
        return redirect('/book')->with('success', 'Berhasil Update Judul Buku : ' . $request->get('title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        books::find($id)->delete();

        return redirect('/book')->with(
            'error',
            'Berhasil Hapus Buku !!'
        );
        return redirect('/book');
    }
}
