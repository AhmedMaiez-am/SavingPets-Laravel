<html>
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

input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #00aced;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #23d5ab;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.container {
    width: 50%;
    height: 50%;
    margin: 10% auto;

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
</head>






<div class="container">
    <form action="{{ url('donations/' .$donations->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$donations->id}}" id="id" />
        <label>Nom de donneur</label></br>
        <input type="text" name="donatorName" id="donatorName" value="{{$donations->donatorName}}"
            class="form-control"></br>
        <label>Type</label></br>
        <select id="type" name="type" class="form-control" required>
            <option value="" default>Choisir le type de don</option>
            <option value="Espèce">Espèce</option>
            <option value="Cheque">Chèque</option>
            <option value="virement">virement</option>


        </select>
        <label>Prix</label></br>
        <input type="text" name="amount" id="amount" value="{{$donations->amount}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
</div>


</html>