<!DOCTYPE html>
<html>
	<head>
		<title>{{ $title or 'Demo Agência Turismo'}}</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

		<!--Fonts-->
		<link rel="stylesheet" href="{{url('assets/panel/css/font-awesome.min.css')}}">

		<!--CSS Person-->
		<link rel="stylesheet" href="{{url('assets/panel/css/especializati.css')}}">
		<link rel="stylesheet" href="{{url('assets/panel/css/especializati-reset.css')}}">

		<!--Favicon-->
		<link rel="icon" type="image/png" href="{{url('assets/panel/imgs/favicon.png')}}">
	</head>
<body>

<section class="menu">
	
	<div class="logo">
		<img src="{{url('assets/panel/imgs/icone-especializati.png')}}" alt="EspecializaTi" class="logo-painel">
	</div>

	<div class="list-menu">
		<ul class="menu-list">
			<li>
				<a href="{{ route('panel') }}">
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</a>
			</li>

			<li>
				<a href="{{ route('brands.index' )}}">
					<i class="fa fa-university" aria-hidden="true"></i>
					Marcas
				</a>
			</li>
		</ul>
	</div>

</section><!--End Menu-->

<section class="content">
	<div class="top-dashboard">
		
		<div class="dropdown user-dash">
		  <div class="dropdown-toggle" id="dropDownCuston" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    <img src="{{asset('assets/panel/imgs/user-carlos-ferreira.png')}}" alt="Carlos Ferreira" class="user-dashboard img-circle">
		    <p class="user-name">Nome User</p>
		    <span class="caret"></span>
		  </div>
		  <ul class="dropdown-menu dp-menu" aria-labelledby="dropDownCuston">
		    <li><a href="#">Perfil</a></li>
			<li><a href="{{ route('logout') }}"
				onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"
				>Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		  </ul>
		</div>
	</div><!--Top Dashboard-->

	<div class="content-ds">

        @yield('content')
		

	</div><!--End Content DS-->

</section><!--End Content-->

	

	<!--jQuery-->
	<script src="{{url('assets/panel/js/jquery-3.1.1.min.js')}}"></script>

	<!-- jS Bootstrap -->
	<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>