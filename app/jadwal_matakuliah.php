<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class jadwal_matakuliah extends Model

//class model nya adalah jadwal_matakuliah
{
    protected $table ='jadwal_matakuliah';
    //nama tablenya adalah jadwal_matakuliah
    protected $fillable =['mahasiswa_id','ruangan_id','dosenmatakuliah_id'];
    //mahasiswa_id, ruangan_id, dosen_matakuliah_id bisa di isi
    protected $guarded = ['id'];
    //id sebagai foreign key

	public function mahasiswa()
	//fungsi public nya adalah model mahasiswa
	{
		return $this->belongsTo(mahasiswa::class);
		//mengatur foreign key dan local key pada model mahasiswa
	}
	public function dosen_matakuliah()
	//fungsi public nya adalah model dosen_matakuliah
	{
		return $this->hasOne(dosen_matakuliah::class, 'dosen_id');
		//mendefinisikan jadwal_matakuliah terhubung hanya dengan satu jumlah model yaitu dosen_matakuliah

	}
	public function ruangan()
	//fungsi public nya adalah model ruangan
	{
		return $this->hasOne(ruangan::class, 'id');
		//mendefinisikan jadwal_matakuliah terhubung hanya dengan satu jumlah model yaitu ruangan
	}
	public function listMahasiswaDanNim()
	{
	$out = [];
	foreach ($this->all() as $mhs) {
		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
		}
	return $out;
	}
}
