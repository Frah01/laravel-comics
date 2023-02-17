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
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" >
              </a>
              <ul class="list-unstyled d-flex flex-wrap">
                @foreach ($menu as $item)
                <li class="mx-2 text-uppercase fw-bold">
                  {{$item}}
                </li>
                @endforeach
              </ul>
            </div>
          </nav>
    </header>
</body>
</html>