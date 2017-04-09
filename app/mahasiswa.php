<?php

namespace App;
//nama foldernya App

use Illuminate\Database\Eloquent\Model;
//menggunakan Illuminate\Database\Eloquent\Model

class mahasiswa extends Model
//class model nya adalah mahasiswa

{
    protected $table ='mahasiswa';
    //nama tablenya adalah mahasiswa
    protected $fillable =['nama','nim','alamat'];
	//nama, nim, alamat, pengguna_id bisa di isi
    protected $guarded = ['id'];
    //id sebagai foreign key

    public function pengguna()
    //fungsi public nya adalah model pengguna
    {
    	return $this->belongsTo(pengguna::class);
    	//mengatur foreign key dan local key pada model pengguna
    }
    public function jadwal_matakuliah()
    //fungsi public nya adalah model pengguna
    {
    	return $this->hasMany(jadwal_matakuliah::class, 'mahasiswa_id');
    	//mendefinisikan mahasiswa memiliki banyak jumlah model lain yaitu jadwal_matakuliah
    }

    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }

    public function getPasswordAttribute(){
    	return $this->pengguna->password;
    }
}
