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
    @include('partials.header')
    <div class="container-fluid background-cards">
        <div class="row">
            <div class="offset-2 col-8 d-flex flex-wrap justify-content-between g-3">
                @foreach($cards as $film)
                <div class="card bg-transparent card-cont text-center border-0 text-white">
                    <img class="thumbs"  src="{{$film['thumb']}}" alt="{{$film['title']}}">
                    <div class="card-body">
                        <p>{{$film['title']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>