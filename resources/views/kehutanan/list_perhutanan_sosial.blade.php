@extends('master')
@section('title','PERHUTANAN SOSIAL')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">Riwayat Pengajuan</div>
			<div class="card-body">
				<a href="{{url('tambah_perhutanan_sosial')}}">
					<button class="btn btn-primary mb-4"><i class="fa fa-plus mr-2"></i>Pengajuan Perhutanan Sosial</button>
				</a>
				<div class="table-responsive">
				<table id="example1" class="table table-striped table-sm mt-4">
					<thead class="text-center">
						<th style="width:8%">No</th>
						<th>Nama Kelompok</th>
						<th>Alamat</th>
						<th>Luas</th>
						<th>Status</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						@php
						$no = 1;
						@endphp
						@foreach($perhutanan_sosial as $ps)
						<tr>
							<td class="text-center">{{$no++}}</td>
							<td>{{$ps->nama_kelompok}}</td>
							<td>
								{{$ps->alamat}}<br>
								Kelurahan / Desa {{$ps->kelurahan}}<br>
								Kecamatan {{$ps->kecamatan}}<br>
								{{$ps->kabupaten}}
							</td>
							<td class="text-center">{{$ps->luas}} Ha</td>
							<td class="text-center">
								@if($ps->tercatat == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Tercatat</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-cross mr-2"></i>Tercatat</span>
								@endif
								<br>
								@if($ps->pemilahan_admin == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi Admin</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi Admin</span>
								@endif
								<br>
								@if($ps->verifikasi_kph == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi KPH</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi KPH</span>
								@endif
								<br>
								@if($ps->verifikasi_dklh == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi DKLH</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi DKLH</span>
								@endif
								<br>
							</td>

							<td class="text-center">
								<a target="_blank" href="{{url('edit_perhutanan_sosial')}}/{{$ps->id_perhutanan_sosial}}">
									<button title="Edit Data" class="btn btn-xs btn-block btn-warning"><i class="fa fa-edit mr-2"></i>Perbarui</button>
								</a>
								<a target="_blank" href="{{url('foto_perhutanan_sosial')}}/{{$ps->id_perhutanan_sosial}}">
									<button title="Galeri" class="btn btn-xs btn-block btn-info"><i class="fa fa-image mr-2"></i>Galeri Foto</button>
								</a>
								<a target="_blank" href="{{url('potensi_hhbk')}}/{{$ps->id_perhutanan_sosial}}">
									<button title="Potensi HHBK" class="btn btn-xs btn-block btn-success"><i class="fa fa-money mr-2"></i>Potensi HHBK</button>
								</a>
								<a target="_blank" href="{{url('history_catatan')}}/{{$ps->id_perhutanan_sosial}}">
									<button title="Potensi HHBK" class="btn btn-xs btn-block btn-danger"><i class="fa fa-envelope mr-2"></i>History Catatan</button>
								</a>
								<a target="_blank" href="{{url('hapus_ps')}}/{{$ps->id_perhutanan_sosial}}" onclick="return confirm('yakin menghapus data {{$ps->nama_kelompok}} ?')">
									<button title="Hapus PS" class="btn btn-xs btn-block btn-warning"><i class="fa fa-trash mr-2"></i>Hapus</button>
								</a>
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection