<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class dosen extends Model
//class model nya adalah dosen
{
    protected $table = 'dosen';
    //nama tablenya adalah dosen
	protected $fillable = ['nama','nip','alamat','pengguna_id'];
	//nama, nip, alamat, pengguna_id bisa di isi
	protected $guarded = ['id'];
	//id sebagai foreign key

	public function pengguna()
	//fungsi public nya adalah model pengguna
	{
		return $this->belongsTo(pengguna::class);
		//mengatur foreign key dan local key pada model pengguna
	}
	public function dosen_matakuliah(){
		return $this->hasMany(dosen_matakuliah::class, 'dosen_id');
		//mendefinisikan dosen memiliki banyak jumlah model lain yaitu dosen_matakuliah
	}
}