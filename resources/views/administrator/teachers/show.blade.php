@extends('layouts.admin')

@section('teachers')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Enseignant</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}">Enseignants</a></li>
                            <li class="breadcrumb-item active">show</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6"><b class="mr-3">Nom: </b> <span class="text-uppercase">{{ $teacher->last_name }}</span></div>
                                <div class="col-6"><b class="mr-3">Prénom:</b> <span class="text-capitalize">{{ $teacher->first_name }}</span></div>
                            </div>
                            <a href="{{ route('teachers.index') }}" class="my-5 btn btn-md btn-secondary"><i class="fas fa-angle-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
