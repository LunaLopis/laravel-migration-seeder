<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Migration-Seed</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div>
        <h1>aziende</h1>
    </div>
    <div class="container">
        <div class="row">
             @foreach ($companies as $company)
                <div class="col col-lg-2 col-md-4 col-sm-12">
                    <a href="">
                        <div class="card mb-3 " >
                            <div class="card-body">
                                <h5 class="card-title">{{$company->nome}}</h5>
                                <h5 class="card-title">{{$company->descrizione}}</h5>
                                <h5 class="card-title">{{$company->indirizzo}}</h5>
                                <h5 class="card-title">{{$company->email}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach 
        </div>
    </div>

</body>

</html>