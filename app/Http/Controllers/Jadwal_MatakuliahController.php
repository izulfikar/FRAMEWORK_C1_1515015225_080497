<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    public function awal()
	{
		return "Hello dari JadwalMatakuliahController";
	}
	public function tambah()
	{
		return $this->simpan();
	}	
    public function simpan()
	{
		$jadwal_matakuliah = new jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa_id = '1';
		$jadwal_matakuliah->ruangan_id = '1';
		$jadwal_matakuliah->dosenmatakuliah_id = '1';
		$jadwal_matakuliah->save();
		return "DATA RUANGAN 
						<br><br> ID : {$jadwal_matakuliah->id} 
						<br> ID Mahasiswa : {$jadwal_matakuliah->mahasiswa_id}
						<br> ID Ruangan : {$jadwal_matakuliah->ruangan_id}
						<br> ID Dosen Mata Kuliah : {$jadwal_matakuliah->dosenmatakuliah_id}  
						<br><br> Telah Di Simpan.";

	}
}
