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
                            <li class="breadcrumb-item active">Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a onclick="addForm()" type="button" data-toggle="modal" 
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">Add Role</a>
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
                                        <th>#</th>
                                        <th scope="col">Nama Role</th>
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
           @include('admin.role.form')
            
        </section>
        <!--/ CSS Classes -->


    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
  
        var table = $('.table-role').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route ('api.role') }}",
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
                    searchable: false
                }
            ]
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modalForm').modal('show');
            $('.modal-title').text('Add Role');
            $('#modalForm form')[0].reset();
        }

        function editForm(id) {
           
            save_method = "edit";
            $('input[name=_method]').val('PATCH');
            $('#modalForm form')[0].reset();
            $.ajax({
                url: "{{ url ('role')}}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
              
                success: function (data) {
                    $('#modalForm').modal('show');
                    $('.modal-title').text('Edit Role');
                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#keterangan').val(data.keterangan);
                },
                error: function () {
                    alert("waduuuh! Update Eror buos");
                }
            });

        }

        $(function () {
         
            $('#modalForm form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url ('role')}}";
                    else url = "{{ url ('role') . '/' }}" + id;

                    $.ajax({
                        type: "PATH",
                        url: url,
                        data: $('#modalForm from').serialize(),
                        success: function ($data) {
                            $('#modalForm').modal('hide');
                            table.ajax.reload();
                         },
                        error: function () {
                            alert("waduuuh!  Eror buos");
                        }
                    });
                    return false;
                }
            });
        });

        function deleteData(id){
           var popup = confirm("yakin?");
           var csrf_token = $('meta[name="csrf-token"]').attr('content');
           if(popup == true){
              $.ajax({
                 type: "POST",
                 url: "{{ url ('role')}}"+ '/'+ id ,
                 data: {'_method':'DELETE','_token': csrf_token},
                 success : function (data) {
                    table.ajax.reload();
                    console.log(data);
                 },
                 error: function(){
                    alert("ops");
                 }
              })
           } 
        }
    </script>
@endpush