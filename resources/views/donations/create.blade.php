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
    height: 82%;
    margin: 10% auto;

}
</style>

<body>
    <div class="container">
        <form class="form_style" action="{{ url('donations') }}" method="post">
            {!! csrf_field() !!}


            <label>Nom de donneur </label>
            <input type="text" id="donatorName" name="donatorName" placeholder="Your donatorName.." class="form-control"
                required>
            <label>Type</label>
            <select id="type" name="type" class="form-control" required>
                <option value="" default>Choisir le type de don</option>
                <option value="Espèce">Espèce</option>
                <option value="Cheque">Chèque</option>
                <option value="virement">virement</option>


            </select>
            <label>Prix</label>
            <input type="text" id="amount" name="amount" class="form-control" required>
            <br>
            <label>Choisir évènement</label>
            <select id="event_id" name="event_id" class="form-control" required>
                @foreach($events as $event)
                <option value="{{$event->id}}">
                    {{ $event->nameEvent }}
                </option>
                @endforeach

            </select>



            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>

</body>












</html>