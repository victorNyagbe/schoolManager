@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('teachers')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Enseignants</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}">Enseignants</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @if($errors->any())
                            <ul class="alert alert-danger list-unstyled alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </ul>
                    @endif

                    <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter un enseignant</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" action="{{ route('teachers.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="last_name">Nom</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}" placeholder="Saisir le nom de l'enseignant...">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">Prénom</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}" placeholder="Saisir le prénom de l'enseignant...">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <!-- jquery-validation -->
    <script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            /*$.validator.setDefaults({
                submitHandler: function () {
                    alert( "Groupe enregistré avec succès" );
                }
            });*/
            $('#quickForm').validate({
                rules: {
                    last_name: {
                        required: true,
                    },
                    first_name: {
                        required: true,
                    },
                },
                messages: {
                    last_name: {
                        required: "Saisir le nom de l'enseignant",
                    },
                    first_name: {
                        required: "Saisir le prénom de l'enseignant",
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
