<!DOCTYPE html>
<html>
<head>
    <title>Fichier PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table class="table table-bordered">
        <tr>
            <th>ref</th>
            <th>age</th>
            <th>race</th>
            <th>type</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($animaux as $animaux)
            <tr>
                <td>{{ $animaux->ref }}</td>
                <td>{{ $animaux->age }}</td>
                <td>{{ $animaux->race }}</td>
                <td>{{ $animaux->type }}</td>
                <td>{{ $animaux->created_at }}</td>
                <td>{{ $animaux->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>