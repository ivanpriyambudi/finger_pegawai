@extends('aapp.app')

@section('title')
Kepsek | Rekap Absensi Guru
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Kepsek | Rekap Absensi Guru
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
		
		<div class="main-card mb-3 card">
			<div class="card-body">
				<table style="width: 100%;" id="example" class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px;">No</th>
							<th>Nama</th>
							<th style="width: 100px;">Tanggal</th>
							<th style="width: 130px;">Datang</th>
							<th style="width: 130px;">Pulang</th>
							<th style="width: 130px;">Izin</th>
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
							<td>
								
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
							<td>
								<div class="alert alert-warning fade show text-center al-stat">Izin | Dinas Luar</div>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Datang</th>
							<th>Pulang</th>
							<th>Izin</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

	</div>

</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection

@section('modal')
@endsection