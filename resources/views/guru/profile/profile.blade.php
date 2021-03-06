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
<div id="tab2">
	<a onclick="myDetail()" class="btn-shadow btn btn-info text-light">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-cog fa-w-20"></i>
		</span>
		Setting
	</a>
</div>

<div id="detail2" style="display: none;">
	<a onclick="myClose()" class="btn-shadow btn btn-info text-light">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-arrow-left fa-w-20"></i>
		</span>
		Kembali
	</a>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div id="tab" class="col-md-12 animated bounceInRight">
		<div class="main-card mb-3 card">

			<div class="row" style="padding: 2.5em">
				<div class="col-md-4">
					<div class="text-center">
						<img class="foto-profil2" src="{{asset('asset/images/avatars/foto.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-md-8">
					<ul class="list-group">
						<li class="list-group-item">
							<table class="table">
								<tbody>
									<tr>
										<th>Nama</th>
										<td>Ivan Priyambudi</td>
									</tr>
									<tr>
										<th>NIP</th>
										<td>1202170035</td>
									</tr>
									<tr>
										<th>Tempat Dinas</th>
										<td>SDN 1 Gendoh</td>
									</tr>
									<tr>
										<th>Jabatan</th>
										<td>Guru</td>
									</tr>
									<tr>
										<th>Mata Pelajaran</th>
										<td>IPA</td>
									</tr>
									<tr>
										<th>Password</th>
										<td>Guru</td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<div id="detail" class="col-md-12 animated bounceInRight con-input" style="display: none" >
		<div class="main-card mb-3 card">
			<div class="card-body">

				<form class="col-md-10 mx-auto" method="POST" action="">
					@csrf
					<h1 class="card-title">Setting</h1>
					<hr>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>

					<div class="form-group">
						<label for="confirm_password">Confirm password</label>
						<div>
							<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
						</div>
					</div>

					<br>
					<div class="form-group">
						<button type="submit" class="mb-2 mr-2 btn btn-shadow btn-primary btn-lg btn-block">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
<script type="text/javascript">

	function myDetail() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");


		if (x.style.display === "none" || i.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";

			i.style.display = "block";
			j.style.display = "none";
		}
	}

	function myClose() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");

		if (x.style.display === "block" || i.style.display === "block") {
			x.style.display = "none";
			y.style.display = "block";

			i.style.display = "none";
			j.style.display = "block";
		}
	}

</script>
@endsection