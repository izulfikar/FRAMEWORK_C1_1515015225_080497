<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

class Dosen_MatakuliahController extends Controller
{
    public function awal()
	{
		return "Hello dari DosenMatakuliahController";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$dosen_matakuliah = new dosen_matakuliah();
		$dosen_matakuliah->dosen_id = '1';
		$dosen_matakuliah->matakuliah_id = '1';
		$dosen_matakuliah->save();
		return "DATA DOSEN MATA KULIAH 
						<br><br> ID : {$dosen_matakuliah->id} 
						<br> ID Dosen : {$dosen_matakuliah->dosen_id} 
						<br> ID Mata Kuliah : {$dosen_matakuliah->matakuliah_id}  
						<br><br> Telah Di Simpan.";

	}
}
