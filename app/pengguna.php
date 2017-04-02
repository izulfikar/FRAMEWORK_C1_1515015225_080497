<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class pengguna extends Model
//class model nya adalah dosen
{
    protected $table ='pengguna';
    //nama tablenya adalah pengguna
    protected $fillable =['username','password'];
    //username dan password bisa di isi

    public function mahasiswa()
    //fungsi public nya adalah model mahasiswa
    {
    	return $this->hasOne(mahasiswa::class,'pengguna_id');
    	//mendefinisikan pengguna terhubung dengan satu model yaitu mahasiswa
    }
    public function dosen()
    //fungsi public nya adalah model dosen
    {
    	return $this->hasOne(dosen::class, 'pengguna_id');
    	//mendefinisikan pengguna terhubung dengan satu model yaitu dosen
    }
}
