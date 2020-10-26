@extends('layout.index')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Role</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Role</a>
                            </li>
                            <li class="breadcrumb-item active">Daftar Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <button type="button" data-toggle="modal" data-target="#create"
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Add Role</button>
        </div>
    </div>

    <div class="content-body">

        <section id="css-classes" class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Role</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless table-striped table-role" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name Role</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal create --}}
            <div class="modal fade text-left" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#" method="POST">
                            @csrf
                            <div class="modal-body">
                                <label>Name Role </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Name Role" class="form-control" name="nama">
                                </div>
                                <label>Keterangan </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Keterangan" class="form-control" name="keterangan">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Modal Edit --}}
            <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('role.update')}}" method="POST" id="editform">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <label>Name Role </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Name Role" id="nama" class="form-control" name="nama">
                                </div>
                                <label>Keterangan </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Keterangan" id="keterangan" class="form-control" name="keterangan">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CSS Classes -->


    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript"> 
       $(document).ready(function () {

          var table =  $('.table-role').DataTable({
               
               serverSide: true,
               ajax: "{{ route ('role.index') }}",
               columns: [{
                       data: 'DT_RowIndex',
                       name: 'DT_RowIndex'
                   },
                   {
                       data: 'nama',
                       name: 'nama'
                   },
                   {
                       data: 'keterangan',
                       name: 'keterangan'
                   },
                 
                   
                   {
                       data: 'action',
                       name: 'action',
                       orderable: true,
                       searchable: true
                   },
               ]
           });
           $('#createnew').click(function () {
               $('#saveBtn').val("create-Item");
               $('#role_id').val('');
               $('#roleForm').trigger("reset");
               $('#create').modal('show');
           });

       });
    </script>
@endpush