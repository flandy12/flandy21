<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- file css -->
    <link rel="stylesheet" href="{{ asset('/css/AllMain.css')}}">
    <title>Document</title>
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
                            <a class="nav-link active" href="{{URL('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL('film')}}">Produck</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL('add')}}">Add</a>
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

    <div class="Show">
        @foreach($results as $nilai)
        <div class="card" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('/storage/'.$nilai->file)}}" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$nilai->nama}}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body> 

</html>
