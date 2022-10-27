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
.center-div
{
  margin: 0 auto;
  width: 500px;
  height: 100px;
  border-radius: 3px;
}

</style>
</head>

<Body>
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


	<br/><br/>
 <section id="about" class="page">
        <div  class="container">
            <div  class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Sterilisations</h2>
                    <div class="border"></div>
                </div>
                </div>
            </div>
        </div>
    </section>

	<br/>
	<div class="center-div">
        <div class="row">
            <div class="col-md-19">
                <div class="card">
                    <div class="card-header">
                        <h2>Scanner le code pour obtenir les informations !</h2>
                    </div>
                    <div  class="card-body content text-center">
					{{ $qrcode }}
                        <br/>
                        <br/>
						<a class="btn btn-info" href="{{ route('sterilisations.index') }}" title="Retourner aux vaccins" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retourner aux stérilisations</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- On affiche le code QR au format SVG -->

</body>
</html>