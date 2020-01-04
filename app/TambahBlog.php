<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahBlog extends Model
{
    protected $table = "tambah_blog";
    protected $primaryKey = 'id';
    protected $fillable = ['id','kategori_id','user_id','judul','isi','jbaca'];
}
