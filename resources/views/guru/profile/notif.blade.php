@extends('aapp.app')

@section('title')
Notifikasi
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-bell icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Notifikasi
@endsection
@section('page-title-desk')
Semua Notifikasi
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')

@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row animated bounceInRight">
	<div class="col-md-12">
		
		<div class="main-card mb-3 card">
			<div class="card-body">
				<table style="width: 100%;" id="example" class="table">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Notifikasi</th>
							<th style="width: 100px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>Pengajuan Izin</td>
							<td>
								<a href="{{route('AbsensiIzin')}}" class="btn-shadow btn btn-primary text-light">
									<span class="btn-icon-wrapper pr-2 opacity-7">
										<i class="fa fa-eye fa-w-20"></i>
									</span>
									Lihat File
								</a>
							</td>
						</tr>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>Pengajuan Izin</td>
							<td>
								<a href="{{route('AbsensiIzin')}}" class="btn-shadow btn btn-primary text-light">
									<span class="btn-icon-wrapper pr-2 opacity-7">
										<i class="fa fa-eye fa-w-20"></i>
									</span>
									Lihat File
								</a>
							</td>
						</tr>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>Pengajuan Izin</td>
							<td>
								<a href="{{route('AbsensiIzin')}}" class="btn-shadow btn btn-primary text-light">
									<span class="btn-icon-wrapper pr-2 opacity-7">
										<i class="fa fa-eye fa-w-20"></i>
									</span>
									Lihat File
								</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Notifikasi</th>
							<th>Action</th>
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