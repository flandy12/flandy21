<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- file csc -->
    <link rel="stylesheet" href="{{ asset('/css/AllMain.css')}}">
</head>

<body>
    <div class="swiper-container">
        <div class="produk_title">
            <h2>Produk</h2>
        </div>
        <div class="swiper-wrapper">
            @foreach($data as $db)
            <div class="swiper-slide">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="https://image.tmdb.org/t/p/w500{{$db['poster_path']}}" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$db['title']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- file script js -->
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>
