<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <div class="container">
        <div class="row" >
            <div class="col-8">
                <div class="d-flex justify-content-center align-items-center">  
                    <div>
                        <img src="{{$single['thumb']}}" alt="">
                    </div>
                    <div class="mt-3 mx-2">
                        <h2 class="p-2">{{$single['title']}}</h2>
                        <h5 class="p-2">U.S PRICE {{$single['price']}}</h5>
                        <p class="p-2">{{$single['description']}}</p>
                    </div>
                </div> 
            </div>
            <div class="col-4">
                <img class="img-adv" src="{{Vite::asset('../resources/img/adv.jpg')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6" >
                <div>  
                    <h3>Talent</h3>
                </div>
                <div class="d-flex">
                    <p>Art by:</p>
                    {{-- <a href="">{{$single['artists']}}</a> --}}
                </div>
                <div>
                    
                </div>
            </div>
            <div class="col-6" >

            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>