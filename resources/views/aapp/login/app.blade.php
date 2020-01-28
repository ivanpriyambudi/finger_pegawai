<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
</head>

<link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/helper.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@yield('css-plus')

<body>

	<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
		<div class="app-container">
			<div class="h-100">
				<div class="h-100 no-gutters row">
					<div class="d-none d-lg-block col-lg-4">
						<div class="slider-light">
							<div class="slick-slider">
								<div>
									<div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
										<div class="slide-img-bg" style="background-image: url('{{asset('asset/images/originals/city.jpg')}}');">
										</div>
										<div class="slider-content"><h3>Rumah Belajar</h3>
											<p>Belajar untuk semua, belajar di mana saja, kapan saja, dengan siapa saja</p>
										</div>
									</div>
								</div>

								<div>
									<div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
										<div class="slide-img-bg" style="background-image: url('{{asset('asset/images/originals/citynights.jpg')}}');">
										</div>
										<div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
											<p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p>
										</div>
									</div>
								</div>

								<div>
									<div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
										<div class="slide-img-bg" style="background-image: url('{{asset('assets/images/originals/citydark.jpg')}}');">
										</div>
										<div class="slider-content"><h3>Complex, but lightweight</h3>
											<p>We've included a lot of components that cover almost all use cases for any type of application.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
						<div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
							<div class="app-logo"></div>
							<h2 class="mb-0">
								<span class="d-block">@yield('title-page')</span>
							</h2>
							<h4>
								<span>Masukkan NIP dan Password anda.</span>
							</h4>
							
							<div class="divider row"></div>
							<div>

								<form action="@yield('login-to')" method="POST">
									@csrf
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="NIP" class="">NIP</label>
												<input name="name" id="NIP" placeholder="NIP" type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="Password" class="">Password</label>
												<input name="password" id="Password" placeholder="Password" type="password" class="form-control">
											</div>
										</div>
									</div>
									<div class="divider row"></div>
									<div class="d-flex align-items-center">
										<div class="ml-auto">
											<button type="submit" class="mb-2 mr-2 btn btn-shadow btn-primary btn-lg btn-block">
												Login
                                            </button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	@yield('js-plus')

</body>

</html>