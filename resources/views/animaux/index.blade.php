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
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <section id="about" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Animaux.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">notre responsabilité de respecter et de protéger l’animal. Au-delà de ce devoir, nous sommes convaincus que la relation que nous pouvons avoir avec un animal apporte à chacun bonheur, partage et complicité. Lutter contre la maltraitance et les trafics d’animaux, contre les abandons, sensibiliser le public et faire évoluer les mentalités, recueillir les animaux abandonnés et leur trouver une famille responsable, soutenir les petites associations, éduquer les jeunes… nous nous mobilisons jour après jour pour permettre à chaque animal d’avoir une vie meilleure et préserver l’avenir du monde vivant.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/12.jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/50.jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/30.jpg" alt="">
                        </div>
                      
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInRight" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/14.jpg" alt="">
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Animaux</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/animaux/create') }}" class="btn btn-primary btn-sm" title="Add New animaux">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ref</th>
                                        <th>age</th>
                                        <th>race</th>
                                        <th>type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($animaux as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ref }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->race }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>
                                            <a href="{{ url('/animaux/' . $item->id) }}" title="View animaux"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/animaux/' . $item->id . '/edit') }}" title="Edit animaux"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/animaux' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="Delete animaux" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <p class="copyright">
                        Created by <a href="http://halibegic.info">halibegic</a> &middot; Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a> &middot; Based on <a href="http://getbootstrap.com/">Bootstrap v4</a> &middot; Icons by <a href="http://fontawesome.io/">Font Awesome</a> &middot;
                        <a href="http://www.github.com/halibegic/merlin">GitHub</a> &middot;
                        <a href="http://steamcommunity.com/id/halibegic">Buy Me a Game</a>
                    </p>
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