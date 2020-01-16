@extends('aapp.app')

@section('title')
Profile
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Profile
@endsection
@section('page-title-desk')
Data diri anda
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
			<div class="grid-menu grid-menu-2col">
				<div class="no-gutters row">

					<div class="col-sm-4">
						<div class="widget-chart">

							<div class="avatar-icon-wrapper avatar-icon-xl">
								<div class="avatar-icon img-prof">
									<img src="{{asset('asset/images/avatars/1.jpg')}}" alt="">
								</div>
							</div>
							<div class="widget-subheading">{{Auth::guard('guru')->user()->name}}</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="widget-chart text-left">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<h6 class="list-group-item-heading"><b>Nama</b></h6>
									<p class="list-group-item-text no-mar">Ivan Priyambudi</p>
								</li>
								<li class="list-group-item">
									<h6 class="list-group-item-heading"><b>NIP</b></h6>
									<p class="list-group-item-text no-mar">1202170035</p>
								</li>
								<li class="list-group-item">
									<h6 class="list-group-item-heading"><b>Tempat Dinas</b></h6>
									<p class="list-group-item-text no-mar">SDN 1 Gendoh</p>
								</li>
								<li class="list-group-item">
									<h6 class="list-group-item-heading"><b>Jabatan</b></h6>
									<p class="list-group-item-text no-mar">Guru</p>
								</li>
								<li class="list-group-item">
									<h6 class="list-group-item-heading"><b>Password</b></h6>
									<p class="list-group-item-text no-mar">Guru</p>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection