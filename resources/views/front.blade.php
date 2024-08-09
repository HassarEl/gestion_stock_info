<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{asset('assets/fronts/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/fronts/css/font-awesome.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{asset('assets/fronts/css/bootstrap-theme.css')}}" media="screen" >
	<link rel="stylesheet" href="{{asset('assets/fronts/css/main.css')}}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
		<div class="container">


			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid d-flex justify-content-between">
					<div class="navbar-header">
						<!-- Button for smallest screens -->
						<a class="navbar-brand" href="{{Route('home')}}"><img src="{{asset('assets/fronts/images/logo.jpg')}}" height="80px" alt="Logo"></a>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					  @if (Route::has('login'))
						@auth
						<li>
							<form method="POST" action="{{route('logout')}}">
								@csrf
								<a class="btn btn-outline-light text-dark ml-lg-3" id="in" href="{{ route('logout') }}" onclick="event.preventDefault();
									this.closest('form').submit(); " role="button">
									{{ __('Log Out') }}
								</a>
							</form>
						</li>
					@else	
					<li class="nav-link">
						<form method="GET" action="{{route('login')}}">
							@csrf
							<a class="btn btn-outline-light text-dark ml-1" id="in" href="{{ route('login') }}" onclick="event.preventDefault();
								this.closest('form').submit(); " role="button">
								{{ __('Login') }}
							</a>
						</form>
					</li>
					<li class="nav-link">
						<form method="GET" action="{{route('register')}}">
							@csrf
							<a class="btn btn-outline-light text-dark ml-1" id="in" href="{{ route('register') }}" onclick="event.preventDefault();
								this.closest('form').submit(); " role="button">
								{{ __('Register') }}
							</a>
						</form>
					</li>	
						@endauth
					@endif
					</ul>
					</div>
				</div>
			</nav>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Ministère de l'Equipement et de l'Eau</h1>
				<p class="tagline" style="font-size: 1.3em">Le Ministère de l’Équipement et de l’Eau prend en charge des secteurs vitaux qui jouent un rôle essentiel dans le développement économique et social du pays, participe directement ou indirectement à l’aménagement du territoire, à la réduction des disparités régionales et à la création d’un environnement propice pour l’investissement.
					Sa mission consiste à élaborer, mettre en œuvre et coordonner la politique du Gouvernement relative au secteur des infrastructures routières, portuaires, hydrauliques et de la météorologie.</p>
				<p><a class="btn btn-default btn-lg" href="{{Route('login')}}">LogIn</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Demander De Materiel Et Fourniture</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
			the chicken was involved; the pig was committed.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use this template</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Bootstrap-powered</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fat-free</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Creative Commons</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Author's support</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Demande De Materiele et Fourniture</h2>
		<br>

		<div class="card">
			<div class="card-body">
				<form action="{{route('demmande.store')}}" method="POST">
					@csrf
					<div style="margin-bottom: 30px;" class="row">
						<div class="col-lg-6">
							<label for="fullname" class="form-label">Nom Prenom</label>
							<input type="text" class="border border-bottom-0 form-control" name="fullname" id="fullname" placeholder="Enter Le Nom Prenom" required>
						</div>
						<div class="col-lg-6">
							<label for="entite" class="form-label">Entité</label>
							<input type="text" class="border border-bottom-0 form-control" name="entite" id="entite" placeholder="Enter L'entite" required>
						</div>
					</div>
					<div style="margin-bottom: 30px;" class="row">
						<div class="col-lg-6">
							<label for="produit" class="form-label">Produit</label>
                    		<select class="form-select" name="produit">
								<option selected>Select product</option>
								@foreach ($produit as $item)
									<option value="{{$item->id}}">{{$item->name}} --- {{$item->designation}}</option>
								@endforeach
                      		</select>
						</div>
						<div class="col-lg-6">
							<label for="qte" class="form-label">Quantité</label>
							<input type="number" min="0" class="border border-bottom-0 form-control" name="qte" id="qte" placeholder="Enter La quantite" required>
						</div>
					</div>
					<div style="margin-bottom: 30px;" class="row">
						
						<div class="col-lg-6">
							<label for="entite" class="form-label">Date</label>
							<input type="date" class="border border-bottom-0 form-control" name="date" id="date" required>
						</div>
					</div>
					<div style="margin-bottom: 30px;" class="row">
						<div class="d-flex justify-content-center">
							<input type="submit" class="btn btn-info m-3" value="Envoyé">
							<input type="reset" class="btn btn-danger m-3" value="Reset">
						</div>
					</div>
				</form>
			</div>
		</div>

		

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{{URL::asset('assets/fronts/js/headroom.min.js')}}"></script>
	<script src="{{URL::asset('assets/fronts/js/jQuery.headroom.min.js')}}"></script>
	<script src="{{URL::asset('assets/fronts/js/template.js')}}"></script>
</body>
</html>