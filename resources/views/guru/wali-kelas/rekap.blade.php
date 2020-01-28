@extends('aapp.app')

@section('title')
Wali Kelas | Rekap Absensi Siswa
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Wali Kelas | Rekap Absensi Siswa
@endsection
@section('page-title-desk')
SDN 1 Gendoh Kelas 5A
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')
@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div class="col-md-12 animated bounceInRight">
		
		<table id="gg" class="table table-hover ht-table">
			<thead>
				<tr>
					<th style="width: 10px;">No</th>
					<th>Nama</th>
					<th style="width: 100px;">Tanggal</th>
					<th style="width: 130px;">Datang</th>
					<th style="width: 130px;">Pulang</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>13/6/2020</td>
					<td>
						<div class="alert alert-success fade show text-center al-stat">Datang | 06:00</div>
					</td>
					<td>
						<div class="alert alert-success fade show text-center al-stat">Pulang | 06:00</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Ivan Priyambudi</td>
					<td>13/6/2020</td>
					<td>
						<div class="alert alert-danger fade show text-center al-stat">Belum Datang</div>
					</td>
					<td>
						<div class="alert alert-danger fade show text-center al-stat">Belum Pulang</div>
					</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
<script src="{{asset('asset/DataTables/tabel-rekap.js')}}"></script>
@endsection

@section('modal')
@endsection