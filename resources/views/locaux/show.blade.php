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
</head>

<body>

@extends('layouts.app')
@section('content')

<section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Locaux</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Plus c'est local plus c'est universel..</p>
                </div>
                
               
            </div>
        </div>






<div class="card">
</br>
<form method="POST" action="{{ url('/locaux' . '/' . $locaux->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="Delete animaux" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
  
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">telephone local : {{ $locaux->telephone_local }}</h5>
        <p class="card-text">adresse local : {{ $locaux->adresse_local }}</p>
        <p class="card-text">fax local : {{ $locaux->fax_local }}</p>
        <p class="card-text">Date de création : {{ $locaux->created_at }}</p>
        <p class="card-text">Date de modification : {{ $locaux->updated_at }}</p>
  </div>
      
  
  </div>
</div>

</section>



<section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Ce que nous aimons faire.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Nous aimons protéger, sauver, soigner et aider nos animaux</p>
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

@endsection

</body>
</html>