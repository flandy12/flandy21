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
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Desain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="add_barang">
            <div class="form-main-1">
                <div class="container">
                    <form method="POST" action="/add/proses" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" class="form-control" name="Nama">
                        </div>
                        <!-- <div class="form-group">
                            <label>Sekolah</label>
                            <input type="text" class="form-control" name="Sekolah">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="description">
                                <input type="text" name="Alamat" class="form-control">
                            </div>
                        </div> -->
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
