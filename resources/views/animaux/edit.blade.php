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



<div class="card">
  <div class="card-header">Animaux Page</div>
  <div class="card-body">
      
      <form action="{{ url('animaux/' .$animaux->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$animaux->id}}" id="id" />
        <label>ref</label></br>
        <input type="text" name="ref" id="ref" value="{{$animaux->ref}}" class="form-control"></br>
        <label>age</label></br>
        <input type="text" name="age" id="age" value="{{$animaux->age}}" class="form-control"></br>
        <label>race</label></br>
        <input type="text" name="race" id="race" value="{{$animaux->race}}" class="form-control"></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" value="{{$animaux->type}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

</body>
</html>