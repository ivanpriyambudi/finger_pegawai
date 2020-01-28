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
Dashboard Admin Sekolah
@endsection

{{-- //////////////////////////////////////////////////////////////// action --}}
@section('page-title-action')
<div class="d-inline-block dropdown">

	<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-business-time fa-w-20"></i>
		</span>
		Buttons
	</button>

	<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a href="javascript:void(0);" class="nav-link">
					<i class="nav-link-icon lnr-inbox"></i>
					<span>Inbox</span>
					<div class="ml-auto badge badge-pill badge-secondary">86</div>
				</a>
			</li>
			<li class="nav-item">
				<a href="javascript:void(0);" class="nav-link">
					<i class="nav-link-icon lnr-book"></i>
					<span>Book</span>
					<div class="ml-auto badge badge-pill badge-danger">5</div>
				</a>
			</li>
			<li class="nav-item">
				<a href="javascript:void(0);" class="nav-link">
					<i class="nav-link-icon lnr-picture"></i>
					<span>Picture</span>
				</a>
			</li>
		</ul>
	</div>

</div>
@endsection
{{-- //////////////////////////////////////////////////////////////////////////// /page title --}}

{{-- /////////////////////////////////////////////////////////////////////////// konten --}}
@section('page-content')
@endsection
{{-- /////////////////////////////////////////////////////////////////////////// /konten --}}

@section('js-plus')
@endsection