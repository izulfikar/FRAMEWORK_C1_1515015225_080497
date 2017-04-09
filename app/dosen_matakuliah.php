<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class dosen_matakuliah extends Model
//class model nya adalah dosen_matakuliah
{
    protected $table ='dosenmatakuliah';
    //nama tablenya adalah dosen
    protected $fillable =['dosen_id','matakuliah_id'];
    //dosen_id, matakuliah_id bisa di isi
    protected $guarded = ['id'];
    //id sebagai foreign key

	public function dosen()
	//fungsi public nya adalah model dosen
	{
		return $this->belongsTo(dosen::class);
		//mengatur foreign key dan local key pada model dosen
	}
	public function matakuliah()
	//fungsi public nya adalah model matakuliah
	{
		return $this->hasOne(matakuliah::class, 'id');
		//mendefinisikan dosen_matakuliah terhubung hanya dengan satu jumlah model yaitu matakuliah
	}

	public function jadwal_matakuliah()
	//fungsi public nya adalah model jadwal_matakuliah;
	{
		return $this->hasMany(jadwal_matakuliah::class, 'id');
		//mendefinisikan dosen_matakuliah memiliki banyak jumlah model lain yaitu jadwal_matakuliah
	}

	public function listDosenDanMatakuliah()
	{
	$out = [];
	foreach ($this->all() as $dsnMTK) {
		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah{$dsnMtk->matakuliah->title})";
		}
	return $out;
	}
}
