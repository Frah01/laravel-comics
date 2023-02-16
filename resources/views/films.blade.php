<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid background-cards">
        <div class="row">
            @foreach($cards as $film)
            <div class="col-12 col-md-4 col-sm-6 d-flex justify-content-center g-3">
                <div class="card bg-transparent card-cont text-center border-0 text-white">
                    <img class="thumbs"  src="{{$film['thumb']}}" alt="{{$film['title']}}">
                    <div class="card-body">
                        <p>{{$film['title']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>