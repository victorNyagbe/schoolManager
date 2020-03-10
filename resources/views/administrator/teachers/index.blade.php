@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('teachers')
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
                            <li class="breadcrumb-item active">Enseignants</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">

                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Groupes
                            </h3>
                            <a href="{{ route('teachers.create') }}" class="btn btn-primary float-right btn-sm"><i class="fas fa-plus"></i> Ajouter</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th colspan="3" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($teachers as $teacher)
                                    <tr>
                                        <td class="text-uppercase">{{ $teacher->last_name }}</td>
                                        <td class="text-capitalize">{{ $teacher->first_name }}</td>
                                        <td width="100">
                                            <form action="{{ route('teachers.delete', $teacher) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group">
                                                    <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer l\'enseignant {{ $teacher->last_name }} {{ $teacher->first_name }} ?')"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Aucun enregistrement n'a été effectué</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th colspan="3" class="text-center">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
