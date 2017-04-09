@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{ url('jadwal_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Jadwal Mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaJadwalMatakuliah as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->nama or 'nama kosong' }}</td>
					<td>{{ $jadwal->nim or 'nim kosong' }}</td>
					<td>{{ $jadwal->dosen_matakuliah->matakuliah->title or 'matakuliah kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('jadwal_matakuliah/edit/'.$jadwal->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('jadwal_matakuliah/'.$jadwal->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('jadwal_matakuliah/hapus/'.$jadwal->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop