<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    {{--een button om naar de create te gaan--}}
    <div class="container col-12 mx-auto">
        <div class="row">
            <div class="col-12">
                <a href="{{route('klant.create')}}" class="btn btn-primary">Klant toevoegen</a>
            </div>
        </div>
    {{--make a foreach loop to show all the data from the database--}}

    <div class="container col-12 mx-auto">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th>Gezinsnaam</th>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Aantal Volwassenen</th>
                        <th>Aantal Kinderen</th>
                        <th>Aantal Baby's</th>
                        <th>Straatnaam</th>
                        <th>Postcode</th>
                        <th>Woonplaats</th>
                        <th>Telefoonnummer</th>
                        <th>Email</th>
                        <th>Wensen</th>
                        <th>Allergieen</th>
                        <th>Wijzig</th>
                    </tr>
                    @foreach($klanten as $klant)
                    <tr>
                        <td>{{$klant->gezin_naam}}</td>
                        <td>{{$klant->voornaam}}</td>
                        <td>{{$klant->tussenvoegsel}}</td>
                        <td>{{$klant->achternaam}}</td>
                        <td>{{$klant->aantal_volwassenen}}</td>
                        <td>{{$klant->aantal_kinderen}}</td>
                        <td>{{$klant->aantal_babys}}</td>
                        <td>{{$klant->straatnaam}}</td>
                        <td>{{$klant->postcode}}</td>
                        <td>{{$klant->plaats}}</td>
                        <td>{{$klant->telefoonnummer}}</td>
                        <td>{{$klant->email}}</td>
                        <td>{{$klant->wensen}}</td>
                        <td>{{$klant->allergie}}</td>
                        <td><a href="{{route('klant.show', $klant->id)}}" class="btn btn-primary">Wijzig</a></td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>