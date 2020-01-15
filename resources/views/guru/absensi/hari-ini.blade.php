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

<div class="row">

	<div class="col-md-12">
		<div class="card mb-3 widget-chart">
			<div class="icon-wrapper rounded-circle">
				<div class="icon-wrapper-bg bg-success"></div>
				<i class="pe-7s-check text-success"></i>
			</div>
			<div class="widget-numbers">Done</div>
			<div class="widget-subheading">Anda telah melakukan absensi hari ini, Terimakasih</div>
			<hr>
		</div>
	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection