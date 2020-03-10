@extends('layouts.app')

@section('style')
    <style>
        .sidebar-item a div.item {
            border-bottom: 1px solid #DDD;
            font-size: 18px;
            padding: 14px;
        }

        .sidebar-item a div {
            font-size: 18px;
            padding: 5px;
            color: #222;
        }

        .sidebar {
            width: 18%;
            top: 52px;
            position: fixed;
            bottom: 0;
            left: 0;
        }

        .aside {
            width: 82%;
            position: absolute;
            right: 0;
            margin-top: 60px;
        }

        @media (max-width: 1000px) {
            .sidebar {
                width: 18%;
                top: 56px;
                position: fixed;
                bottom: 0;
                left: 0;
            }

            .aside {
                width: 82%;
                position: absolute;
                right: 0;
                margin-top: 60px;
            }

            .menu-item-sm-hide {
                display: none;
            }

            .sidebar-item div a div.item {
                text-align: center;
            }

            .sidebar-item div a div.item i {
                font-size: 18px;
            }
        }

        @media (max-width: 1000px) {
            .menu-item-sm-show {
                display: block;
            }
        }
    </style>
@endsection

@section('information')
    <div class="sidebar indigo lighten-5">
        <div class="sidebar-item">
            <div class="z-depth-0">
                <a href="#" class="text-decoration-none">
                    <div class="item">
                        <i class="fa fa-users text-sm-center"></i>
                        <b><span class="menu-item-sm-hide"> Enseignants</span></b>
                    </div>
                </a>
                <a href="#" class="text-decoration-none">
                    <div class="item">
                        <i class="fa fa-building text-sm-center"></i>
                        <b><span class="menu-item-sm-hide"> Groupes</span></b>
                    </div>
                </a>
                <a href="#" class="text-decoration-none">
                    <div class="item">
                        <i class="fa fa-money-check-alt text-sm-center"></i>
                        <b><span class="menu-item-sm-hide"> Finances</span></b>
                    </div>
                </a>
            </div>
{{--            <div class="accordion" id="accordionExample">
                <div class="z-depth-0">
                    <div id="headingOne">
                        <a href="#!" class="text-decoration-none" data-toggle="collapse" data-target="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <div class="item">
                                <i class="fa fa-shopping-bag"></i>&nbsp;
                                <b><span class="menu-item-sm-hide">Gestion de groupes <span class="badge badge-pill badge-light z-depth-0"></span></span></b>
                            </div>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="pl-4 pr-4">
                            <a href="#!" data-toggle="modal" data-target="#filiereModal">
                                <div>
                                    <i class="icofont-plus"></i>
                                    <span class="menu-item-sm-hide">Ajouter un groupe</span>
                                </div>
                            </a>
                            <a href="">
                                <div>
                                    <i class="icofont-listine-dots spinnerShower"></i>
                                    <span class="menu-item-sm-hide spinnerShower">Liste des groupes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    <div class="aside container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis debitis eius eos illo illum ipsam iste laboriosam libero maxime mollitia, nihil, nostrum omnis perspiciatis placeat quas, reiciendis similique veritatis vero?
    </div>

@endsection
