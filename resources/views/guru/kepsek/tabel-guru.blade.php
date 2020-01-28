@extends('aapp.app')

@section('title')
Kepsek | Tabel Guru
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-like icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Kepsek | Tabel Guru
@endsection
@section('page-title-desk')
SDN 1 Gendoh
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
					<th>NIP</th>
					<th>Jabatan</th>
					<th style="width: 200px;">Jenis Kelamin</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>Guru</td>
					<td>Laki-laki</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>Guru | Wali Kelas 5A</td>
					<td>Perempuan</td>
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