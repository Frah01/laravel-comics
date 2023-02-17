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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
    </footer>
<div class="sing-up-footer">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center py-3">
                <div>
                    <button class="footer-button text-white" >SING-UP NOW!</button>
                </div>
                <div>
                    <ul class="footer-list text-white d-flex align-items-center m-0">
                        <h4 class="text-uppercase m-0">follow us</h4>
                        @foreach ($socials as $social)
                        <li class="mx-1">
                            <img src="{{asset(Vite::asset($social))}}" alt="">
                        </li>  
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>