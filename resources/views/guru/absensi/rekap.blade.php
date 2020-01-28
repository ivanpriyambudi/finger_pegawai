@extends('aapp.app')

@section('title')
Absensi | Rekap
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Absensi | Rekap
@endsection
@section('page-title-desk')
Dashboard Rekap Absensi anda
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')

@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row animated bounceInRight">
	<div class="col-md-12">
		
		<table id="gg" class="table table-hover ht-table">
			<thead>
				<tr>
					<th>Tanggal</th>
					<th>Jam</th>
					<th>Tempat</th>
					<th style="width: 100px;">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>SDN 1 Gendoh</td>
					<td>
						<div class="alert alert-success fade show text-center al-stat" role="alert">Hadir</div>
					</td>
				</tr>
				<tr>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>SDN 1 Gendoh</td>
					<td>
						<div class="alert alert-primary fade show text-center al-stat" role="alert">Pulang</div>
					</td>
				</tr>
				<tr>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>SDN 1 Gendoh</td>
					<td>
						<div class="alert alert-warning fade show text-center al-stat" role="alert">Izin</div>
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