@extends('aapp.app')

@section('title')
Absensi | Hari Ini
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-clock icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Absensi | Hari Ini
@endsection
@section('page-title-desk')
Dashboard Absensi anda Hari Ini
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')

@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="animated bounceInRight">
<div class="row">

	<div class="col-md-12">
		<div class="card mb-3 widget-chart">
			<div class="icon-wrapper rounded-circle">
				<div class="icon-wrapper-bg bg-success"></div>
				<i class="pe-7s-check text-success"></i>
			</div>
			<div class="widget-numbers">Absen Berhasil</div>
			<div class="widget-subheading">Senin, 13 Oktober 2020</div>
			<hr>
			<div class="alert alert-success fade show" role="alert">
				<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
				<p>
					Terimakasih anda telah melakukan absen hari ini dengan dengan tepat waktu.
				</p>
				<hr>
				<p class="mb-0">
					Anda absen hari ini jam <b>13:00</b> WIB, di <b>SDN 1 Gendoh</b>.
				</p>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="card mb-3 widget-chart">
			<div class="icon-wrapper rounded-circle">
				<div class="icon-wrapper-bg bg-danger"></div>
				<i class="pe-7s-close-circle text-danger"></i>
			</div>
			<div class="widget-numbers">Belum Absen</div>
			<div class="widget-subheading">Senin, 13 Oktober 2020</div>
			<hr>
			<div class="alert alert-danger fade show" role="alert">
				<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
				<p>
					Silahkan melakukan absen hari ini.
				</p>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="card mb-3 widget-chart">
			<div class="icon-wrapper rounded-circle">
				<div class="icon-wrapper-bg bg-warning"></div>
				<i class="pe-7s-mail-open-file text-warning"></i>
			</div>
			<div class="widget-numbers">Izin</div>
			<div class="widget-subheading">Senin, 13 Oktober 2020</div>
			<hr>
			<div class="alert alert-warning fade show" role="alert">
				<h4 class="alert-heading">Hello {{Auth::guard('guru')->user()->name}}!</h4>
				<p>
					Hari ini anda mengajukan Izin dan telah dikonfirmasi oleh Admin.
				</p>
				<hr>
				<p class="mb-0">
					Anda mengajukan Izin hari ini jam <b>13:00</b> WIB, di <b>SDN 1 Gendoh</b>.
				</p>
			</div>
		</div>
	</div>

</div>
</div>
@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection