@extends('layouts.admin')

@section('groups')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Groupes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('groups.index') }}">Groupes</a></li>
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
                            <h3 class="card-title">Modifier un Groupe</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" action="{{ route('groups.update', $group) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-control" id="code" value="{{ $group->code }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description" value="{{ $group->description }}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('groups.index') }}" class="btn btn-secondary">Annuler</a>
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
                    code: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {
                    code: {
                        required: "Entrer le code du groupe",
                    },
                    description: {
                        required: "Saisir la description du groupe",
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
