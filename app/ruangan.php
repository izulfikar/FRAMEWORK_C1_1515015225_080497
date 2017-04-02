<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class ruangan extends Model
//class model nya adalah dosen
{
    protected $table ='ruangan';
    //nama tablenya adalah ruangan
    protected $fillable =['title'];
    //title bisa di isi
    protected $guarded = ['id'];
	//id sebagai foreign key

	public function jadwal_matakuliah()
	//fungsi public nya adalah model jadwal_matakuliah
	{
		return $this->belongsTo(jadwal_matakuliah::class);
		//mengatur foreign key dan local key pada model jadwal_matakuliah
	}
	public function jadwal_matakuliah()
	//fungsi public nya adalah model jadwal_matakuliah
	{
		return $this->hasMany(jadwal_matakuliah::class, 'id');
		//mendefinisikan ruangan memiliki banyak jumlah model lain yaitu jadwal_matakuliah
	}
}
