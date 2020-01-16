@extends('aapp.app')

@section('title')
Dashboard
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Dashboard
@endsection
@section('page-title-desk')
Dashboard Absensi Guru
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')
@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row animated bounceInDown">
	<div class="col-lg-6 col-xl-4">
		<div class="card mb-3 widget-content">
			<div class="widget-content-wrapper">
				<div class="widget-content-left">
					<div class="widget-heading">Masuk</div>
					<div class="widget-subheading">Total Absensi Masuk</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-success"><span>12</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-xl-4">
		<div class="card mb-3 widget-content">
			<div class="widget-content-wrapper">
				<div class="widget-content-left">
					<div class="widget-heading">Tidak Masuk</div>
					<div class="widget-subheading">Total Absensi Tidak Masuk</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-primary"><span>100</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-xl-4">
		<div class="card mb-3 widget-content">
			<div class="widget-content-wrapper">
				<div class="widget-content-left">
					<div class="widget-heading">Izin</div>
					<div class="widget-subheading">Total Absensi Izin</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-warning"><span>0</span></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row animated bounceInRight">
	<div class="col-md-8">
		<div class="main-card mb-3 card">
			<div class="card-header"><i class="header-icon pe-7s-news-paper icon-gradient bg-mixed-hopes"></i>Rekap Absensi
			</div>
			<div class="card-body">
				<table class="mb-0 table table-hover">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>
								<div class="alert alert-success fade show text-center al-stat" role="alert">Hadir</div>
							</td>
						</tr>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>
								<div class="alert alert-primary fade show text-center al-stat" role="alert">Pulang</div>
							</td>
						</tr>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>
								<div class="alert alert-warning fade show text-center al-stat" role="alert">Izin</div>
							</td>
						</tr>
						<tr>
							<td>13/6/2020</td>
							<td>06:00</td>
							<td>
								<div class="alert alert-warning fade show text-center al-stat" role="alert">Izin</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="text-center d-block p-3 card-footer">
				<a href="{{route('AbsensiRekap')}}" class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
					<span class="mr-2 opacity-7">
						<i class="icon icon-anim-pulse pe-7s-look"></i>
					</span>
					<span class="mr-1">Lihat Detail Rekap Absensi anda</span>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="main-card mb-3 card">

			<div class="card-header"><i class="header-icon pe-7s-clock icon-gradient bg-mixed-hopes"></i>Absensi Hari Ini
			</div>

			{{-- <div class="card-body">
				<div class="widget-chart">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg bg-success"></div>
						<i class="pe-7s-check text-success"></i>
					</div>
					<div class="widget-numbers" style="font-size: 1.5rem !important;">Absen Berhasil</div>
					<div class="widget-subheading">Senin, 13 Oktober 2020</div>
					<br>
					<div class="alert alert-success fade show" role="alert">
						<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
						<p>
							Terimakasih anda telah melakukan absen hari ini dengan dengan tepat waktu.
						</p>
					</div>
				</div>
			</div> --}}

			{{-- <div class="card-body">
				<div class="widget-chart">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg bg-danger"></div>
						<i class="pe-7s-close-circle text-danger"></i>
					</div>
					<div class="widget-numbers" style="font-size: 1.5rem !important;">Belum Absen</div>
					<div class="widget-subheading">Senin, 13 Oktober 2020</div>
					<br>
					<div class="alert alert-danger fade show" role="alert">
						<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
						<p>
							Silahkan melakukan absen hari ini.
						</p>
					</div>
				</div>
			</div> --}}

			<div class="card-body">
				<div class="widget-chart">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg bg-warning"></div>
						<i class="pe-7s-close-circle text-warning"></i>
					</div>
					<div class="widget-numbers" style="font-size: 1.5rem !important;">Izin</div>
					<div class="widget-subheading">Senin, 13 Oktober 2020</div>
					<br>
					<div class="alert alert-warning fade show" role="alert">
						<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
						<p>
							Hari ini anda mengajukan Izin dan telah dikonfirmasi oleh Admin.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="row animated bounceInUp">
	<div class="col-md-12">
		<div class="main-card mb-3 card">

			<div class="card-header"><i class="header-icon pe-7s-mail-open-file icon-gradient bg-mixed-hopes"></i>Status Pengajuan Surat Izin Hari Ini
			</div>
			<div class="card-body">

				<div class="widget-content">
					<div class="widget-content-outer">
						<div class="widget-content-wrapper">
							<div class="widget-content-left">
								<div class="widget-heading">Keterangan</div>
								<div class="widget-subheading">Pribadi</div>
							</div>
							<div class="widget-content-right">
								<h4>Menunggu Konfirmasi</h4>
							</div>
						</div>
						<div class="widget-progress-wrapper">
							<div class="mb-3 progress">
								<div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
							</div>
						</div>
					</div>
				</div>

				{{-- <div class="widget-chart">
					<div class="alert alert-success fade show" role="alert">
						<h4 class="alert-heading">Pengajuan Surat Izin Diterima</h4>
						<p>
							Pengajuan Surat Izin anda hari ini telah diterima, gunakan sebaik-baiknya, terimakasih.
						</p>
						<div class="widget-subheading">Senin, 13 Oktober 2020</div>
					</div>
				</div>

				<div class="widget-chart">
					<div class="alert alert-danger fade show" role="alert">
						<h4 class="alert-heading">Pengajuan Surat Izin Ditolak</h4>
						<p>
							Maaf, Pengajuan Surat Izin anda hari ini ditolak, klik link di bawah ini untuk melihat keterangan penolakan.
						</p>
						<div class="widget-subheading">Senin, 13 Oktober 2020</div>
						<hr>
						<a href="#!" class="mb-2 mr-2 btn-icon btn-pill btn btn-outline-danger" data-toggle="modal" data-target=".tolak">
							<i class="pe-7s-look btn-icon-wrapper"> </i>
							Keterangan Penolakan
						</a>
					</div>
				</div> --}}

			</div>
		</div>
	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection

@section('modal')
<div class="modal fade tolak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Keterangan Penolakan Izin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			</div>
		</div>
	</div>
</div>
@endsection