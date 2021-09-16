<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Your Next Trip</title>
</head>
<body>
    <div class="container py-3">
        <div id="trips" class="row row-cols-1 row-cols-md-3 row-cols-lg-4 justify-content-evenly g-4">
            @foreach($trips as $trip)
            <div class="card col" style="width: 18rem;">
                <img class="card-img-top" src="{{$trip->img}}" alt="{{$trip->destination}}">
                <div class="card-body">
                  <h5 class="card-title">{{$trip->destination}}</h5>
                  <p class="card-text">{{$trip->description}}</p>
                  <a href="#" class="btn btn-primary">Get it for {{$trip->price}}$</a>
                </div>
            </div>
            @endforeach;
        </div>
    </div>
</body>
</html>