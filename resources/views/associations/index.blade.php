

   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Merlin HTML/CSS template">
    <meta name="author" content="Hasan Alibegic">
    <link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" async defer>
    <link rel="stylesheet" href="{{url('css/style.css')}}" async defer>
    
    
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


    @foreach ($associations as $association)
			<tr>
			{{ $association->titre }}
			</tr>
			@endforeach

 
