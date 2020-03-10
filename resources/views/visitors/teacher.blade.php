@extends('layouts.app')

@section('style')
    <style>
        .cover {
            background-image: url("{{ URL::asset('assets/images/cover.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 22rem;
            opacity: 0.5;
        }

        @media screen and (min-width: 700px) and (max-width: 992px) {
            .cover {
                margin-top: 2rem;
                height: 16rem;
            }
        }

        @media screen and (max-width: 699px) {
            .cover {
                margin-top: 3rem;
                height: 10rem;
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

@section('teacher')
    <div class="cover">
        <div class="d-flex justify-content-center">
            <p class="text-uppercase d-none d-lg-block" style="margin-top: 10rem; font-style: italic; font-size: 5rem;">Enseignants</p>
            <p class="text-uppercase d-none d-md-block d-lg-none" style="margin-top: 5rem; font-style: italic; font-size: 5rem;">Enseignants</p>
            <p class="text-uppercase d-block d-md-none" style="margin-top: 4rem; font-style: italic; font-size: 2rem;">Enseignants</p>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            @foreach($teachers as $teacher)
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <p class="p-5 z-depth-2">
                        <i class="fa fa-user fa-3x d-flex justify-content-center"></i><br>
                        <a href="#" class="text-decoration-none mt-2">
                            <span class="text-uppercase"> {{ $teacher->last_name }} </span> <span class="text-capitalize"> {{ $teacher->first_name }} </span>
                        </a>
                    </p>
                </div>
            @endforeach

        </div>
    </div>

    <!-- footer -->
    @include('included.footer')
    <!-- /. footer -->
@endsection
