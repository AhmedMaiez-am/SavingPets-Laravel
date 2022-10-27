<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Merlin HTML/CSS template">
    <meta name="author" content="Hasan Alibegic">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Saving Pets</title>
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('css/style.css')}}" async defer>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
body {
    background: linear-gradient(-45deg, #ee7752, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
    height: 100vh;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

</style>
</head>

	
<body>
<div id="navbar-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed">
            <div class="container">
                <a class="navbar-brand nav-external" href="#home">Saving Pets</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
						<a class="nav-link" href="/vaccins">Vaccins</a>
                        </li>
                        <li class="nav-item">
						<a class="nav-link" href="/sterilisations">Sterilisations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
	<br/><br/><br/><br/>

	<div style="width:800px; margin:0 auto;" class="card">
  <div class="card-body">
	<!-- Si nous avons un vaccin $vaccin -->
	@if (isset($sterilisation))

	<form method="POST" action="{{ route('sterilisations.update', $sterilisation) }}" enctype="multipart/form-data" >
	<h1>Editer une sterilisation</h1>
		@method('PUT')

	@else


	<form method="POST" action="{{ route('sterilisations.store') }}" enctype="multipart/form-data" >
	<h1>Ajouter une nouvelle sterilisation</h1>
	@endif

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="libelle" >Libelle</label><br/>

			<input class="form-control" type="text" name="libelle" value="{{ isset($sterilisation->libelle) ? $sterilisation->libelle : old('libelle') }}"  id="libelle" placeholder="Le libelle du sterilisation" >
            {{ isset($sterilisation->libelle) ? $sterilisation->libelle : old('libelle') }}</input>
			@error("libelle")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="responsable" >Responsable</label><br/>
			<input class="form-control" type="text" name="responsable" id="responsable" value="{{ isset($sterilisation->responsable) ? $sterilisation->responsable : old('responsable') }}" placeholder="Le responsable du sterilisation" >
            {{ isset($sterilisation->responsable) ? $sterilisation->responsable : old('responsable') }}</input>
			@error("responsable")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="description" >description</label><br/>
			<input class="form-control" type="text-area" name="description" id="description" value="{{ isset($sterilisation->description) ? $sterilisation->description : old('description') }}" placeholder="La description du sterilisation" >
            {{ isset($sterilisation->description) ? $sterilisation->description : old('description') }}</input>
			@error("description")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="date" >Date du sterlisation</label><br/>
			<input class="form-control" type="date" name="date" id="date" value="{{ isset($sterilisation->date) ? $sterilisation->date : old('date') }}" placeholder="La date du sterilisation" >
            {{ isset($sterilisation->date) ? $sterilisation->date : old('date') }}</input>
			@error("date")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<label class="label">Vaccin</label><br/>
							<select class="form-control" name="vaccin_id">
                                @foreach($vaccins as $vaccin)
                                    <option value="{{$vaccin->id}}">
                                        {{ $vaccin->titre }}</option>
                                @endforeach
                            </select><br/><br/><br/>
		<input type="submit" name="valider" value="Valider" class="btn btn-success">

	</form>
	</div>
</div>

<section class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Ce que nous aimons faire.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Nous aimons protéger, sauver, soigner et aider nos animaux</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="300">
                        <i class="fa fa-globe fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">www.savingpets.com</a></h3>
                       
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="600">
                        <i class="fa fa-cloud fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">www.facebook.com/savingpets</a></h3>
                        
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="900">
                        <i class="fa fa-mobile fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">71.000.000</a></h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 animated hiding" data-animation="fadeInUp">
                    <ul class="social list-inline">
                        <li class="list-inline-item">
                            <a class="facebook" href="http://www.facebook.com" title="Facebook">
                                <i class="fa fa-facebook fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter" href="http://www.twitter.com" title="Twitter">
                                <i class="fa fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="google-plus" href="http://www.plus.google.com" title="Google+">
                                <i class="fa fa-google-plus fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="dribbble" href="http://www.linkedin.com" title="Dribbble">
                                <i class="fa fa-dribbble fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.3/imagesloaded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.min.js"></script>
    <script src="js/script.js?v=1.0"></script>
    <!-- Google Analytics: change UA-25089888-9 to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-25089888-9');ga('send','pageview');
    </script>
	</body>
</html>