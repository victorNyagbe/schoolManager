@extends('layouts.app')

@section('style')
    <style>
        .cover {
            background-image: url("{{ URL::asset('assets/images/cover.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 35rem;
        }

        @media screen and (max-width: 768px) {
            .cover {
                margin-top: 3rem;
                height: 16rem;
            }
        }

        @font-face {
            font-family: Catamaran-light;
            src: url("{{ URL::asset('fonts/Catarman/Catamaran-light.ttf') }}");
        }

        .home {
            font-family: Catamaran-light;
        }

        .presentation {
            font-size: 18px;
        }

        @font-face {
            font-family: Ubuntu;
            src: url("{{ URL::asset('fonts/ubuntu/Ubuntu-LightItalic.ttf') }}");
        }

        .avis{
            font-family: Ubuntu;
            font-size: 18px;
        }
    </style>
@endsection

@section('home')
    <div class="cover"></div>
    <div class="container home">
        <div class="row mt-5">
            <div class="col-12">
                <p class="text-justify presentation">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum libero magni modi odio
                    quisquam recusandae repudiandae! Consequatur dicta, dignissimos earum eligendi est modi odit
                    repellat repudiandae sunt tenetur, ullam.
                    Aliquam dolore et illo nemo nesciunt nobis quam quod quos repellat repudiandae, sint tempora totam
                    voluptates. Ab, alias assumenda autem consequuntur eius incidunt inventore maxime necessitatibus non
                    repellat saepe suscipit.
                    Aliquid architecto aspernatur consectetur eligendi, fuga officia perspiciatis quibusdam rem sed
                    soluta? Asperiores, autem cum dignissimos doloremque esse ex, labore placeat, provident quam
                    repellendus sapiente similique tenetur voluptatem? Accusantium, sint.
                </p>
            </div>
            <div class="col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ URL::asset('assets/images/1.jpg') }}"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::asset('assets/images/2.jpg') }}"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::asset('assets/images/1.jpg') }}"
                                 alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="text-justify presentation">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum libero magni modi odio
                    quisquam recusandae repudiandae! Consequatur dicta, dignissimos earum eligendi est modi odit
                    repellat repudiandae sunt tenetur, ullam.
                    Aliquam dolore et illo nemo nesciunt nobis quam quod quos repellat repudiandae, sint tempora totam
                    voluptates.
                </p>
            </div>
        </div>
        <h4 class="h4-responsive text-uppercase text-center"><b>responsables</b></h4>

        <div class="row mt-4 mb-2 uk-child-width-1-2@m uk-grid-match">
            <div class="col-12 col-md-4 mb-3" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300; repeat: true">
                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ URL::asset('assets/images/responsables/responsable.jpg') }}"
                             alt="Card image cap" width="100%" class="z-depth-3">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title text-center">John Doe</h4>
                        <!-- Text -->
                        <p class="card-text">
                           <p class="h5-responsive text-center"><i class="fa fa-mail-bulk"></i> email@example.com</p>
                           <p class="h5-responsive text-center"><i class="fa fa-mobile-alt"></i> +228 97 37 48 62</p>
                        </p>
                        <hr>
                        <h3 class="text-center h3-responsive">Fondateur</h3>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-12 col-md-4 mb-3">
                <!-- Card -->
                <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 350; repeat: true">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ URL::asset('assets/images/responsables/responsable.jpg') }}"
                             alt="Card image cap" width="100%" class="z-depth-3">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title text-center">John Doe</h4>
                        <!-- Text -->
                        <p class="card-text">
                            <p class="h5-responsive text-center"><i class="fa fa-mail-bulk"></i> email@example.com</p>
                            <p class="h5-responsive text-center"><i class="fa fa-mobile-alt"></i> +228 97 37 48 62</p>
                        </p>
                        <hr>
                        <h3 class="text-center h3-responsive">Directeur</h3>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-12 col-md-4 mb-3">
                <!-- Card -->
                <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 400; repeat: true">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ URL::asset('assets/images/responsables/responsable.jpg') }}"
                             alt="Card image cap" width="100%" class="z-depth-3">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title text-center">John Doe</h4>
                        <!-- Text -->
                        <p class="card-text">
                            <p class="h5-responsive text-center"><i class="fa fa-at"></i> email@example.com</p>
                            <p class="h5-responsive text-center"><i class="fa fa-mobile-alt"></i> +228 97 37 48 62</p>
                        </p>
                        <hr>
                        <h3 class="text-center h3-responsive">Sécrétaire</h3>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>

    <div class="container home">
        <h4 class="h4-responsive text-uppercase text-center mt-5 mb-4"><b><i class="fa fa-info-circle"></i> actualités</b></h4>
        <div class="row my-3">
            <div class="col-12 col-md-4">
                <img src="{{ URL::asset('assets/images/1.jpg') }}" alt="actualité_image" width="100%" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-8 mt-3 mt-md-0">
                <span>Titre : </span><span class="h6-responsive text-uppercase">CONFERENCE SUR LA SENSIBILISATION DES ELEVES SUR LE SIDA ET LES IST</span><br><br>
                <span>Date, heure et lieu : </span><span class="h6-responsive ">14 Février 2020 à 15:00 dans l'enceinte</span><br><br>
                <span>Organisé par : </span><span class="h6-responsive ">l'établissement</span><br><br>
                <span>Présenté par : </span><span class="h6-responsive ">Professeur Victor NYAGBE</span><br><br>
                <span>Assistée par : </span><span class="h6-responsive ">la direction et les élèves</span>
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12 col-md-4">
                <img src="{{ URL::asset('assets/images/1.jpg') }}" alt="actualité_image" width="100%" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-8 mt-3 mt-md-0">
                <span>Titre : </span><span class="h6-responsive text-uppercase">CONFERENCE SUR LA SENSIBILISATION DES ELEVES SUR LE SIDA ET LES IST</span><br><br>
                <span>Date, heure et lieu : </span><span class="h6-responsive ">14 Février 2020 à 15:00 dans l'enceinte</span><br><br>
                <span>Organisé par : </span><span class="h6-responsive ">l'établissement</span><br><br>
                <span>Présenté par : </span><span class="h6-responsive ">Professeur Victor NYAGBE</span><br><br>
                <span>Assistée par : </span><span class="h6-responsive ">la direction et les élèves</span>
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12 col-md-4">
                <img src="{{ URL::asset('assets/images/1.jpg') }}" alt="actualité_image" width="100%" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-8 mt-3 mt-md-0">
                <span>Titre : </span><span class="h6-responsive text-uppercase">CONFERENCE SUR LA SENSIBILISATION DES ELEVES SUR LE SIDA ET LES IST</span><br><br>
                <span>Date, heure et lieu : </span><span class="h6-responsive ">14 Février 2020 à 15:00 dans l'enceinte</span><br><br>
                <span>Organisée par : </span><span class="h6-responsive ">l'établissement</span><br><br>
                <span>Présentée par : </span><span class="h6-responsive ">Professeur Victor NYAGBE</span><br><br>
                <span>Assistée par : </span><span class="h6-responsive ">la direction et les élèves</span>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5">
            <button type="button" class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#basicExampleModal">
                envoyer un avis <i class="fa fa-send"></i>
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="letter-spacing: 1px;"><i class="fa fa-clipboard"></i> AVIS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col mb-3">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="votre nom ...">
                                </div>
                                <div class="col mb-3">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="votre prénom ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">+228</div>
                                    </div>
                                    <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="votre numero ...">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ecrivez votre avis ici ..."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ANNULER</button>
                        <button type="button" class="btn btn-success">ENVOYER</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: gray;">
        <div class="container text-white">
            <h4 class="h4-responsive text-uppercase text-center pt-4 text-white"><b><i class="fa fa-comment"></i> les avis</b></h4>
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <p class="text-justify avis py-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda cumque delectus deserunt dolorum excepturi facilis fuga illo maiores
                        molestias neque obcaecati odit officia omnis quis quo recusandae. <br>
                        <p class="text-right small font-italic"> - Jane Doe</p>
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-justify avis py-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda cumque delectus deserunt dolorum excepturi facilis fuga illo maiores
                        molestias neque obcaecati odit officia omnis quis quo recusandae. <br>
                        <p class="text-right small font-italic"> - Jane Doe</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
        @include('included.footer')
    <!-- /. footer -->
@endsection
