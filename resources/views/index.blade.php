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
    <span class="icon">
        <img src="{{asset('/img/chat.png')}}" width="60">
    </span>
    <div class="main-one">
        <div class="main-all">
            <div class="clock">
                <span class="time"></span>
            </div>
            <div class="main-text">
                <h2 class="judul">Hallo Word</h2>
                <p>casncasnicsa sacjsancsjac jcascnasjc aicnsacsancsa ncasicnas<br>
                    jcascnasjc aicnsacsancsa ncasicnas </p>
                <div class="button-all">
                    <button class="button-1"> get In</button>
                </div>
            </div>
        </div>
    </div>

    <section class="main-three">
        <div class="main-three-all">
            <div class="judul">
                <h3>About</h3>
                <hr>
            </div>
        </div>
    </section>

    <article class="main-four">
        <div class="article-all">
            <div class="article-img">
                <img src="{{asset('/img/lan.jpg')}}" class="img-four">
            </div>
            <div class="article-item">
                <h2>Flandy Rockyliano Mamun</h2>
                <p>Hi ! Nama saya Flandy Rockyliano Mamun panggilan saya landy, usia saya 17 tahun ,
                    Saya tinggal di jakarta selatan. Saya Bersekolah di SMK Grarika lektur jurusan<b> Teknik Komputer
                        Jaringan</b>. Diusia saat ini saya sanagat senang sekali di dunia <i>coding </i>.<br> <b>Untuk
                        mngetahui apa saja yang telah saya pelajari silahkan klik tombol di bawah !</b>
                </p>
                <button class="button-2">Basic</button>
            </div>
        </div>
    </article>

    <div class="main-five">
        <div class="five-column">
            <div class="column-item">
                <img src="{{asset('/img/group.png')}}" alt="" class="img-item">
                <h3 class="text-4">Team
                </h3>
                <p> attempt to represent an accurate depiction of a visual reality but instead use colours, shapes,
                    different forms and gestural emotion represent idea.
                </p>
            </div>
            <div class="column-item">
                <img src="{{asset('/img/internet.png')}}" alt="" class="img-item">
                <h3 class="text-4"> Global team
                </h3>
                <p> Exhibition idea does not attempt to represent an accurate depiction of a visual reality

                </p>
            </div>
            <div class="column-item">
                <img src="{{asset('/img/computer.png')}}" alt="" class="img-item">
                <h3 class="text-4">Devolopment</h3>
                <p> Exhibition idea does not attempt to represent an accurate depiction of a visual reality

                </p>
            </div>
        </div>
    </div>

    <div class="main-produk">
        <div class="swiper-container">
            <div class="produk_title">
                <h2>Produk Database</h2>
            </div>
            <div class="swiper-wrapper">
                @foreach($users2 as $data)
                <div class="swiper-slide">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{asset('/storage/'.$data->file)}}" alt="{{$data->file}}">
                        <div class="card-body">
                            <p class="card-text">{{$data -> nama}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

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
    <footer>
        <div class="all-footer">
            <div class="item-footer ">
                <li>Privacy Statement</li>
                <li> Data Protection</li>
                <li>Accessibility</li>
                <li> Trademarks</li>
            </div>
            <div class="item-footer ">
                <li>Privacy Statement</li>
                <li> Data Protection</li>
                <li>Accessibility</li>
                <li> Trademarks</li>

            </div>
            <div class="item-footer ">
                <li>Privacy Statement</li>
                <li> Data Protection</li>
                <li>Accessibility</li>
                <li> Trademarks</li>
                <li>Privacy Statement</li>
            </div>
            <div class="item-footer ">
                <li>Privacy Statement</li>
                <li> Data Protection</li>
                <li>Accessibility</li>
                <li> Trademarks</li>
                <li>Privacy Statement</li>
            </div>

        </div>
    </footer>
    <!-- file script js -->
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>
