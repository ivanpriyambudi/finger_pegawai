@extends('aapp.app')

@section('title')
Dashboard
@endsection

@section('css-plus')
@endsection

{{-- //////////////////////////////////////////////////////////////////////////// page title --}}
{{-- //////////////////////////////////////////////////////////////// title --}}
@section('page-title-icon')
<i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Dashboard
@endsection
@section('page-title-desk')
Dashboard Admin Sekolah SDN 1 Gendoh
@endsection

{{-- //////////////////////////////////////////////////////////////// action --}}
@section('page-title-action')
@endsection
{{-- //////////////////////////////////////////////////////////////////////////// /page title --}}

{{-- /////////////////////////////////////////////////////////////////////////// konten --}}
@section('page-content')
<div class="row animated bounceInDown">
	<div class="col-lg-6 col-xl-4">
		<div class="card mb-3 widget-content">
			<div class="widget-content-wrapper">
				<div class="widget-content-left">
					<div class="widget-heading">Guru</div>
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
					<div class="widget-heading">Wali Kelas</div>
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
					<div class="widget-heading"></div>
					<div class="widget-subheading">Total Absensi Izin</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-warning"><span>0</span></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
{{-- /////////////////////////////////////////////////////////////////////////// /konten --}}

@section('js-plus')
@endsection