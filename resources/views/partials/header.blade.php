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
              {{-- <ul>
                @foreach ($menu as $item)
                <li>
                  {{$item}}
                </li>
                @endforeach
               
              </ul> --}}
            </div>
          </nav>
    </header>
</body>
</html>