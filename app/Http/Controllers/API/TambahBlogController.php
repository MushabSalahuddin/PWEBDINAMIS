<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TambahBlog;

class TambahBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TambahBlog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kategori_id' => 'required|integer',
            'user_id' => 'required|integer',
            'judul' => 'required|string|max:30',
            'isi' => 'required|string|max:30',
            'jbaca' => 'required|integer'
        ]);

        return TambahBlog::create([
            'id' => $request['id'],
            'kategori_id' => $request['kategori_id'],
            'user_id' => $request['user_id'],
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'jbaca' => $request['jbaca']
        ]);
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
        
    }
}
