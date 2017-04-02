<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class matakuliah extends Model
//class model nya adalah matakuliah
{
    protected $table ='matakuliah';
    //nama tablenya adalah matakuliah
    protected $fillable =['title','keterangan'];
    //title dan keterangan bisa di isi
    protected $guarded = ['id'];
    //id sebagai foreign key

	public function dosen_matakuliah()
	//fungsi public nya adalah model pengguna
	{
		return $this->belongsTo(dosen_matakuliah::class);
		//mengatur foreign key dan local key pada model dosen_matakuliah
	}
	public function dosen_matakuliah()
	//fungsi public nya adalah model pengguna
	{
		return $this->hasMany(dosen_matakuliah::class, 'id');
		//mendefinisikan model matakuliah memiliki banyak jumlah model lain yaitu dosen_matakuliah
	}
}
