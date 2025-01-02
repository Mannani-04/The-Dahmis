<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    
        <!-- CSS Local -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dahmis.css') }}">
    
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                AOS.init();
            });
        </script>
    </head>
    
<body class="">
    <div class="cc">
        <img id="t" src="{{ asset('dahmis/t.jpg') }}" alt="Logo" class="img-fluid">
    </div>
    <img style="position: absolute;z-index:1299;top:50px" src="{{asset('dahmis/ZWA9.png')}}" class="img-fluid" alt="">
    <div class="bg-success">
        <div class="langue">
            <nav class="container navbar navbar-expand-lg">
                <ul id="lan" class="navbar-nav">
                    <li class="nav-item" id="lien">
                        <a class="nav-link text-white" href="#">Accueil</a>
                    </li>
                    <li class="nav-item" id="lien">
                        <a class="nav-link text-white" href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="nav-item" id="lien">
                        <a class="nav-link text-white" href="#"><i class="bi bi-whatsapp"></i></a>
                    </li>
                    <li class="nav-item" id="lien">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Langue
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="{{ asset('dahmis/th.jpg') }}" alt="English" style="width: 20px; height: 20px;"> English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="{{ asset('dahmis/fr.jpg') }}" alt="Français" style="width: 20px; height: 20px;"> Français
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <nav id="nav" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">A PROPOS DE NOUS</a>
                    <a class="nav-link" href="#">THES</a>
                    <a class="nav-link" href="#">NEGOCES</a>
                    <a class="nav-link" href="#">ACTUALITE & MEDIAS</a>
                    <a class="nav-link" href="#">CARRIERS</a>
                    <a class="nav-link" href="#">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('dahmis/a.jpg')}}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('dahmis/h.jpg')}}" class="d-block w-100" alt="Image 2">
            </div>
        </div>
            <img id="circle" src="{{asset('dahmis/circle.png')}}" alt="" class="img-fluid">
    </div>
    <br>
<div class="gamme">
    <div class="container">
        <h1 class="text-center text-success">Nos Gammes Thé</h1>
        <p class="text-center">Le thé est la gamme phare et historique de la Somathes.</p>
        <div class="row">
            @foreach ($gam as $g)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="fade-down" data-aos-duration="5000">
                    <div class="text-center">
                        <!-- Image -->
                        <img src="{{ asset('storage/'.$g->image) }}" alt="{{ $g->titre }}" class="img-fluid mb-3">
                        <!-- Title under the image -->
                        <h2 class="text-success">{{ $g->titre }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br><br><br>

    <div class="container ">
        <div id="maroc" class="row ms-auto" data-aos="fade-right" data-aos-duration="5000">
            <img class="float-end" src="{{asset('dahmis/b.jpg')}}" width="150px" alt="">
        </div>
    </div>
<br><br>

<div id="entreprise" class="container">
    <div class="row">
        <div class="slider">
            <marquee behavior="scroll" direction="left" scrollamount="5" >
            @foreach ($ent as $e)

                <img src="{{asset('storage/'.$e->image)}}" alt="Image">
            
            @endforeach
            @foreach ($ent as $e)

            <img src="{{asset('storage/'.$e->image)}}" alt="Image">
        
        @endforeach
        @foreach ($ent as $e)

        <img src="{{asset('storage/'.$e->image)}}" alt="Image" >
    
    @endforeach
        </marquee>
        </div>
    </div>
</div>


    <br><br>

    <div class="valeurs" ata-aos="fade-up-right">
        <div class="container">
            <h1 class="text-center text-white mb-4" data-aos="fade-down" data-aos-duration="5000">Nos Valeurs</h1>
            <p class="text-center text-white mb-5" data-aos="fade-down" data-aos-duration="5000">
                La Somathes s'est forgée une identité forte, fondée sur le respect de ses principes. Sa culture partagée <br>
                par ses collaborateurs et imprégnée des valeurs de Groupe Holmarcom, consolide davantage sa <br>
                croissance et sa notoriété sur le marché. Nos cinq valeurs fondamentales :
            </p>
            <div class="row justify-content-center">
                <!-- Fidélité -->
                <div class="col-6 col-md-2 text-center mb-4" data-aos="fade-down-right" data-aos-duration="5000">
                    <img src="{{asset('dahmis/success.png')}}" alt="Fidélité" class="img-fluid mb-2" id="imgval">
                    <h2 class="text-white">Fidélité</h2>
                </div>
                <!-- Innovation -->
                <div class="col-6 col-md-2 text-center mb-4" data-aos="fade-down-right" data-aos-duration="5000">
                    <img src="{{asset('dahmis/aproval.png')}}" alt="Innovation" class="img-fluid mb-2" id="imgval">
                    <h2 class="text-white">Innovation</h2>
                </div>
                <!-- Engagement -->
                <div class="col-6 col-md-2 text-center mb-4" data-aos="fade-down-right" data-aos-duration="5000">
                    <img src="{{asset('dahmis/rate.png')}}" alt="Engagement" class="img-fluid mb-2" id="imgval">
                    <h2 class="text-white">Engagement</h2>
                </div>
                <!-- Respect -->
                <div class="col-6 col-md-2 text-center mb-4" data-aos="fade-down-right" data-aos-duration="5000">
                    <img src="{{asset('dahmis/celebrity.png')}}" alt="Respect" class="img-fluid mb-2" id="imgval">
                    <h2 class="text-white">Respect</h2>
                </div>
                <!-- Solidarité -->
                <div class="col-6 col-md-2 text-center mb-4" data-aos="fade-down-right" data-aos-duration="5000">
                    <img src="{{asset('dahmis/puzzle.png')}}" alt="Solidarité" class="img-fluid mb-2" id="imgval">
                    <h2 class="text-white">Solidarité</h2>
                </div>
            </div>
        </div>
    </div>
    
    <br><br>
    <div class="nouvelle">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text text-center text-success fw-bold">Dernières nouvelles</h1>
                <br><br>
                @foreach ($nou as $n)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4"  data-aos="fade-up-left" data-aos-duration="5000">
                        <div class="card shadow position-relative">
                            <img src="{{asset('storage/'.$n->image)}}" alt="..." class="card-img-top" style="height: 320px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title container" style="font-weight: 700">{{$n->titre}}</h5>
                            </div>
                            <button id="btn" type="submit" class="btn btn-success position-absolute">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <br><br><br> <br><br><br>

    <div class="text-center" id="imgfot">
        <br><br>
        <img src="{{asset('dahmis/t.jpg')}}" alt="">
    </div>
    <footer class="bg-success text-white">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Section 1: About -->
                <div class="col-md-2 footer-section text-center">
                    <h5>Somathes</h5>
                    <ul>
                        <li><a href="#">Notre Histoire</a></li>
                        <li><a href="#">Nos Métiers</a></li>
                        <li><a href="#">Nos Valeurs</a></li>
                    </ul>
                </div>
                <!-- Section 2: Products -->
                <div class="col-md-2 footer-section text-center">
                    <h5>Nos Produits</h5>
                    <ul>
                        <li><a href="#">Thé</a></li>
                        <li><a href="#">Confiserie</a></li>
                        <li><a href="#">Conserve</a></li>
                        <li><a href="#">Snacking</a></li>
                        <li><a href="#">Fromage</a></li>
                    </ul>
                </div>
                <!-- Section 3: News -->
                <div class="col-md-2 footer-section text-center">
                    <h5>Actualités</h5>
                    <ul>
                        <li><a href="#">Médiathèque</a></li>
                        <li><a href="#">Photothèque</a></li>
                    </ul>
                    <div class="footer-social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Section 4: Contact -->
                <div class="col-md-2 footer-section footer-contact text-center">
                    <h5>Contact</h5>
                    <p>Q.I Ain Borja, Hay Makam<br>Casablanca, Maroc</p>
                    <h6>Tél: +212 522 350 873</h6>
                    <h6>Fax: +212 522 350 911</h6>
                </div>
                <!-- Section 5: Logo -->
                <div class="col-md-2 footer-section footer-logo text-center">
                    <img src="{{asset('dahmis/A1.jpg')}}" alt="HOLMAROC" class="img-fluid">
                    <h4>HOLMAROC</h4>
                    <h6>GROUP</h6>
                </div>
            </div>
        </div>
        <div class="text-center">
            <img id="stroke" style="" src="{{asset('dahmis/Stroke.png')}}" alt="">
        </div>
    </footer>
    <br>
    <!-- Footer Bottom -->
     <div class="text-center">
        <button id="btnbtn" class="btn btn-success"><i class="fa-solid fa-arrow-up"></i></button>
        <div class="text-center py-2">
            <p class="text text-secondary">&copy; 2024 Somathes. Tous droits réservés.</p>
            <p class="text text-primary">Terms & Conditions - Privacy Policy - Sitemap</p>
        </div>
        <br>
        <div id="divfo" class="bg-success">
        </div>
     </div>
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>