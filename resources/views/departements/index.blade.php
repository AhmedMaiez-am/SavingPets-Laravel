<!DOCTYPE html>
<html lang="en-us">
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

.container1 {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;

    margin: 15% 15% auto;
}
</style>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Merlin HTML/CSS template">
    <meta name="author" content="Hasan Alibegic">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Saving Pets</title>
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600')}}" async
        defer>
    <link rel="stylesheet"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css')}}" async
        defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.css')}}" async
        defer>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css')}}"
        async defer>
    <link rel="stylesheet"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" async
        defer>
    <link rel="stylesheet" href="{{url('css/style.css')}}" async defer>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div id="navbar-top">
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed">
        <div class="container">
            <a class="navbar-brand nav-external" href="#home">Saving Pets</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
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



<div class="container1">
    <div class="row">
        <div class="col-md-9">
            <div class="card">

                <div class="card-body">
                    <a href="{{ url('/departements/create') }}" class="btn btn-success btn-sm"
                        title="Add New Departement">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Capacite </th>
                                    <th>Number of applicants </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departements as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Nom }}</td>
                                    <td>{{ $item->Desc }}</td>
                                    <td>{{ $item->Capacite }}</td>
                                    <td>{{ $item->Nb_App }}</td>

                                    <td>
                                        <a href="" title="View departements" data-toggle="modal"
                                            data-target="#myModal"><button class="btn btn-info btn-sm"><i
                                                    class=" fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="{{ url('/departements/' . $item->id . '/edit') }}"
                                            title="Edit candidatures"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" action="{{ url('/departements' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-primary btn-sm" title="Delete animaux"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>

                                        </form>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close btn btn-info btn-sm"
                                                            data-dismiss="modal">&times;</button>

                                                    </div>
                                                    <div class="modal-body">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>













                                            </div>
                                        </div>

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
<script>

</script>