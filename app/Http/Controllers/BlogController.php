<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varAngka = ["Mush'ab","Mamam","Yasin","Alfi"];
        return view('Blog.DataBlog', compact('varAngka'));

        return view('Blog.TambahBlog', compact('varAngka'));

        return view('Blog.Pengguna', compact('varAngka'));

        return view('Blog.Kategori', compact('varAngka'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tambahblog($id)
    {
        return view('Blog.TambahBlog');
    }

    public function datablog($id)
    {
        return view('Blog.DataBlog');
    }

    public function pengguna($id)
    {
        return view('Blog.Pengguna');
    }

    public function kategori($id)
    {
        return view('Blog.Kategori');
    }
}
