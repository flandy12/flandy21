<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/AllMain.css')}}">
    <title>Document</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">FLANDY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse m-auto" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="film">Produck</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add">Add</a>
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

    <div class="main-three">
        <div class="main-three-all">
            <div class="judul">
                <h3>About</h3>
                <p>Cerita Singkat Flandy Rockyliano MamunProfile </p>
                <hr>
            </div>
        </div>
    </div>

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
                <img src="{{asset('/img/group.png')}}" alt="" class="img-item" id="img-item">
                <h3 class="text-4">Team
                </h3>
                <p> attempt to represent an accurate depiction of a visual reality but instead use colours, shapes,
                    different forms and gestural emotion represent idea.
                </p>
            </div>
            <div class="column-item">
                <img src="{{asset('/img/internet.png')}}" alt="" class="img-item" id="img-item">
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

    <div class="main-six">
        <div class="container">
            <div class="all-item-skil">
                <div class="row">
                    <div class="col">
                        <li class="skil">
                            <a>1</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>3</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>3</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>4</a>
                            <p> ascsacsa</p>
                        </li>
                    </div>
                    <div class="col">
                        <li class="skil">
                            <a>5</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>6</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>7</a>
                            <p> ascsacsa</p>
                        </li>
                        <li class="skil">
                            <a>8</a>
                            <p> ascsacsa</p>
                        </li>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main-seven">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/john-towner-JgOeRuGD_Y4.jpg')}}" alt="..." id="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/john-towner-JgOeRuGD_Y4.jpg')}}" alt="..." id="img"> 
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/john-towner-JgOeRuGD_Y4.jpg')}}" alt="..." id="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/john-towner-JgOeRuGD_Y4.jpg')}}" alt="..." id="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

</body>

</html>
