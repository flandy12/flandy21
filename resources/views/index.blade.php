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
                            <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produck</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
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
                <h2 class="judul">Making your business ideas come true</h2>
                <p>casncasnicsa sacjsancsjac jcascnasjc aicnsacsancsa ncasicnas<br>
                    jcascnasjc aicnsacsancsa ncasicnas </p>
                <div class="button-all">
                    <button class="button-1"> get In</button>
                </div>
            </div>
            <!-- <img src="./img/kakarkter-2.png" class="img-one"> -->
        </div>
    </div>
    <!-- <article class="main-two">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($users2 as $data)
                <div class="swiper-slide">
                    <div class="article-all">
                        <div class="article-item">
                            <img src="{{asset('/img/desain1.jpg')}}" class="img-two">
                        </div>
                        <div class="article-item">
                            <h2>{{$data->nama}}</h2>
                            <p>Capture every move your competitors make automatically. Tap into hundreds of millions of
                                competitive
                                intelligence sources to track everything from a pricing change, customer reviews,
                                marketing
                                campaigns, and more. Spend less time researching and more time analyzing and acting on
                                your
                                discoveries.</p>
                            <button class="button-2">Lajsa</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
          <div class="swiper-wrapper">
                <div class="swiper-slide"><h1>hi</h1></div>
                <div class="swiper-slide"><h1>landy</h1></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
   
      <div class="menu-barang">
            <div class="menu-baju">
                <h4>Baju</h4>
            </div>
            <div class="menu-sepatu">
                <h4>Sepatu</h4>
            </div>
            <div class="menu-jaket">
                <h4>Jaket</h4>
            </div>
        </div> 
    </article> -->
    <section class="main-three">
        <div class="main-three-all">
            <div class="judul">
                <h3>About</h3>
                <hr>
            </div>
            <!-- // echo "<img src=".'barang/'.$siswa['nama_file']." class='card-img-top'>"; -->

            <!-- <div class="Item-brand swiper-container">
                <div class="swiper-wrapper">
                    
                </div>
            </div> -->

            <!-- <div class="card-group">
                <div class="card">
                  <img src="./img/ashim-d’silva-WeYamle9fDM.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="./img/GIGiSdz4g5Y_Full.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="./img/pierpaolo-lanfrancotti-NKUEACkOhbk-unsplash.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div> -->
        </div>
    </section>
    <article class="main-four">
        <div class="article-all">
            <div class="article-img">
                <img src="{{asset('/img/lan.jpg')}}" class="img-four">
            </div>
            <div class="article-item">
                <h2>Flandy Rockyliano Mamun</h2>
                <p>Capture every move your competitors make automatically. Tap into hundreds of millions of competitive
                    intelligence sources to track everything from a pricing change, customer reviews, marketing
                    campaigns, and more. Spend less time researching and more time analyzing and acting on your
                    discoveries.</p>
                <button class="button-2">Lajsa</button>
            </div>
        </div>
    </article>

    <!-- <article class="main-four">
        <div class="main-four-all">
            <div class="foto">
                <img src="./img/4cpgs2Y-YjA_Full.jpg" id="one">
            </div>
            <div class="artikel">
                <p>Punya website dan mengelolanya sendiri menjadi idaman banyak orang. Mereka yang menghabiskan waktu
                    berselancar di dunia maya akan berinisiatif untuk membuat website secara mandiri. Dengan website,
                    seseorang dapat menampilkan konten yang disukainya baik untuk kepentingan individu maupun untuk
                    kelompok bisnis.

                    Seiring perkembangan, website tidak hanya berperan sebagai pintu layanan dan informasi. Website kini
                    menjelma jadi serambi dan representasi diri suatu organisasi. Adakalanya bukan karena nilai datanya
                </p>
                <button class="btn">Hallo</button>
            </div>
        </div>
    </article> -->
    <!-- <section class="five-all">
        <article class="main-five">
            <div class="main-five-container">
                <img src="./img/A0U9EMwvkXs_Full.jpg" alt="" class="jumbo">
            </div>
            <div class="main-five-list">
                <img src="./img/A0U9EMwvkXs_Full.jpg" alt="" class="item-list active-img">
                <img src="./img/behance_download_1580080788011.jpg" alt="" class="item-list">
                <img src="./img/james-padolsey-tvPvROBv0F4-unsplash.jpg" alt="" class="item-list">
                <img src="./img/vincent-giersch-Jky9coxzeHI-unsplash.jpg" alt="" class="item-list">
                <img src="./img/pierpaolo-lanfrancotti-NKUEACkOhbk-unsplash.jpg" alt="" class="item-list">
                <img src="./img/k1bO_VTiZSs_Full.jpg" alt="" class="item-list">
                <img src="./img/GIGiSdz4g5Y_Full.jpg" alt="" class="item-list">
                <img src="./img/Ys-DBJeX0nE_Full.jpg" alt="" class="item-list">
            </div>
        </article>
   </section> -->
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
                <h2>Produk</h2>
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
                <!-- <div class="swiper-slide">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{asset('/img/img2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{asset('/img/img3.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{asset('/img/img4.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div> -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
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
