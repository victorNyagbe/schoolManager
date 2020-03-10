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
                            <li class="breadcrumb-item active">edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- jquery validation -->
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

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Modifier un Enseignant</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" action="{{ route('teachers.update', $teacher) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="last_name">Nom</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $teacher->last_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Prénom</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $teacher->first_name }}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

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
