<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beershop</title>
</head>
<body>
    <div class="d-flex flex-wrap">

        @forelse ($beers as $key => $beer)
            <div class="card w-50" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $beer -> nome }}</h5>
                    <h5 class="card-title">{{ $beer -> tipologia }}</h5>
                    <h5 class="card-title">{{ $beer -> tasso_alcolico }}</h5>
                    <h5 class="card-title">{{ $beer -> litri }}</h5>
                </div>
            </div>
        @empty
            <p>Non ci sono birre</p>
        @endforelse
    </div>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>