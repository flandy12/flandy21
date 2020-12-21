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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">FLANDY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse m-auto" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{URL::to('/')}}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/film')}}">Produck</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/add')}}">Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <a href="login.html"> <button class="login-main">Login</button></a>
                    <a href="daftar.html"> <button class="sign-main">Sign</button></a>
                </div>

            </div>
        </nav>
    </header>
    <div class="Main-movie">
        <div class="container">
            <h2>Popular</h2>
            <div class="row row-cols-1 row-cols-md-5 g-4">

                @foreach($datafilm as $db)
                <div class="col mt-4">
                    <div class="card h-100">
                       <a href="https://image.tmdb.org/t/p/w500{{$db['poster_path']}}">
                       <img class="card-img-top w-100" src="https://image.tmdb.org/t/p/w500{{$db['poster_path']}}"
                            alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">{{$db['original_title']}}</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$db['release_date']}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- file script js -->
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>
