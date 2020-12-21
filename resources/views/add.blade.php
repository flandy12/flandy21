<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/AllMain.css')}}">
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
                            <a class="nav-link active" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
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

<div class="container">
        <div class="add_barang">
            <div class="form-main-1">
                <div class="container">
                    <!-- action =/add/proses hasil dapat dilihat di folder router web.php -->
                    <form method="POST" action="/add/proses" enctype="multipart/form-data">
                        <!-- @csrf befungsi agar form pada laravel berfungis (memberikan angka angka numerik sebagain inisialisasi form tersebut) -->
                        @csrf
                       
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" class="form-control" name="Nama">
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <div class="description">
                                <input type="text" name="Email" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">FIle</span>
                            </div>
                            <div class="custom-file">
                              <input type="file"  id="inputGroupFile01" name="file_">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="login">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</div>

</body>

</html>
