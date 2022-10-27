

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
    <div class="loader">
        <div class="loading"></div>
    </div>
    <section id="home" class="page overlay">
        <div class="container">
            <div class="content cover text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="mt-0 mb-4 animated hiding" data-animation="fadeInDown" data-delay="300">SAVING PETS</h1>
                        <h3 class="mt-0 mb-0 animated hiding" data-animation="fadeIn" data-delay="600">Nous sommes ici pour protéger nos animaux.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <a class="nav-link" href="{{ url('/login') }}">Découvrir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Accueillir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Protéger</a>
                        </li>
                        <li class="nav-item">
<<<<<<< HEAD
                            <a class="nav-link" href="/associations">Associations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Clients</a>
=======
                            <a class="nav-link" href="{{ url('/login') }}">Aider</a>
>>>>>>> abde53fa1913b39c5f5a2d84310ae71e725c180d
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Informer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Adopter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Nous rejoindre</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Saving Pets.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Une plateforme pour la gestion des associations assurant la
protection des animaux de la rue blessés et accidentés et le suivi des
bénévoles qui protègent ces animaux par la stérilisation et la vaccination</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="300">
                        <i class="fa fa-medkit fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">Vaccination</a></h3>
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="600">
                        <i class="fa fa-heartbeat fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#"> Stérilisation</a></h3>
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="900">
                        <i class="fa fa-university fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">Associations</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Des soins pour tous.</h2>
                    <p>Ils assurent tous les jours les consultations, vaccinations et opérations chirurgicales de plus de 20 000 animaux malades chaque année contre le seul remboursement des frais.</p>
                    <div class="border"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="portfolio">
                
                            <ul class="items list-unstyled clearfix animated hiding mb-0" data-animation="fadeInRight">
                                <li class="item branding">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="{{('img/team/40.jpg')}}" alt="">
                                        <div class="overlay">
                                            <span>Etiam porta</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="{{('img/team/6.jpg')}}" alt="">
                                        <div class="overlay">
                                            <span>Lorem ipsum</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item branding">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="{{('img/team/50.jpg')}}" alt="">
                                        <div class="overlay">
                                            <span>Vivamus quis</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="{{('img/team/1.jpg')}}" alt="">
                                        <div class="overlay">
                                            <span>Donec ac tellus</span>
                                        </div>
                                    </a>
                                </li>
                               
                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    <section id="associations" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Nos associations</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Here your can find the associations we are working with</p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/1.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1"></h5>
                            <p>Web Developer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
            
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/2.jpg" alt="">
                        </div>

                        <div class="bio mt-4">
                            <h5 class="mb-1">Clarinda Gratia</h5>
                            <p>Designer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.pinterest.com" title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/3.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Mandeep Eimear</h5>
                            <p>Mobile Developer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://developer.android.com/index.html" title="Android Developers">
                                        <i class="fa fa-android"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.stackoverflow.com" title="Stack Overflow">
                                        <i class="fa fa-stack-overflow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInRight" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/4.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Wigstan Fergus</h5>
                            <p>QA Engineer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.plus.google.com" title="Google+">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.trello.com" title="Trello">
                                        <i class="fa fa-trello"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="mailto:john.doe@mail.com" title="Email">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="clients" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Nos clients</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/1.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1"></h5>
                            <p>Web Developer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
            
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/2.jpg" alt="">
                        </div>

                        <div class="bio mt-4">
                            <h5 class="mb-1">Clarinda Gratia</h5>
                            <p>Designer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.pinterest.com" title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/3.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Mandeep Eimear</h5>
                            <p>Mobile Developer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://developer.android.com/index.html" title="Android Developers">
                                        <i class="fa fa-android"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.stackoverflow.com" title="Stack Overflow">
                                        <i class="fa fa-stack-overflow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInRight" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/4.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Wigstan Fergus</h5>
                            <p>QA Engineer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Lorem ipsum dolor sit, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.plus.google.com" title="Google+">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.trello.com" title="Trello">
                                        <i class="fa fa-trello"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="mailto:john.doe@mail.com" title="Email">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


=======
   
>>>>>>> abde53fa1913b39c5f5a2d84310ae71e725c180d
    <section id="about" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Un paradis pour les animaux âgés.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Souvent âgés et difficilement adoptables, ces animaux peuvent désormais vivre une retraite méritée dans la plus complète liberté, en retrouvant un cadre familial qu’anime une « marraine d’adoption ».</p>
                </div>
               
</br></br></br>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="page overlay">
        <div class="container">
            <div class="content cover text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Contacts.</h2>
                    <div class="border"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 animated hiding" data-animation="fadeInRight" data-delay="600">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <a href="#">Tunisie, Tunis - Lac 1</a>
                    </div>
                    <div class="col-sm-4 animated hiding" data-animation="fadeInDown" data-delay="300">
                        <i class="fa fa-phone fa-3x"></i>
                        <a href="tel:9876543210">(+216) 73-558-300</a>
                    </div>
                    <div class="col-sm-4 animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <i class="fa fa-envelope fa-3x"></i>
                        <a href="mailto:john.doe@mail.com">Saving-pets@gmail.tn</a>
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