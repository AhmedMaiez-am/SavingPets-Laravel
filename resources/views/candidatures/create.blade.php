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
        <form class="form_style" action="{{ url('candidatures') }}" method="post">
            {!! csrf_field() !!}
            <label>First Name</label>
            <input type="text" id="nom" name="nom" placeholder="Your name.." class="form-control" required>

            <label>Last Name</label>
            <input type="text" id="prenom" name="prenom" placeholder="Your last name.." class="form-control" required>
            <label>Email</label>
            <input type="text" id="email" name="email" placeholder="exemple@exemple.com" class="form-control" required>
            <label>Numéro Téléphone</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
            <br>
            <label>Postuler pour être</label>
            <select id="position" name="position" class="form-control" required>
                <option value="" default>Choisir un rôle</option>
                <option value="Bénévole">Bénévole</option>
                <option value="Vétérinaire">Vétérinaire</option>

            </select>
            <label>Département</label>
            <select id="depart" name="depart" class="form-control" required>
                <option value="" default>Choisir un département</option>
                <option value="RH">RH</option>
                <option value="Finance">Finance</option>
                <option value="Communication">Communication</option>

            </select>
            <label>Pourquoi voulez-vous postuler pour ce poste?</label>
            <input type="text" id="description" name="description" placeholder="description" class="form-control"
                required>


            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>

</body>







</html>