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
                            <li class="breadcrumb-item active">List Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="javascript:void(0)" class="btn btn-primary mr-1 mb-1 waves-effect waves-light "
                id="tombol-tambah">Add Role</a>
        </div>
    </div>

    <div class="content-body">

        <section id="role" class="card">
            <div class="card-header">
                <h4 class="card-title">List Role</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless table-striped " id="table-role"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Name Role</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" width="250px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-left" id="konfirmasi-modal" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger white">
                            <h5 class="modal-title" id="myModalLabel120">PERHATIAN !</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p align="center">Data akan dihapus secara permanen <br>
                                Anda yakin akan mengehapus data ini.
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" name="btndelete"
                                id="btndelete">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.role.form')
        </section>
            {{-- Modal create --}}
           

          
            <!--/ CSS Classes -->


    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var trole = $('#table-role').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url('role') }}',
                type: 'GET'
            },
            columns: [{
                    data: 'DT_RowIndex'
                },

                {
                    data: 'nama'
                },
                {
                    data: 'keterangan'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
    $('#tombol-tambah').click(function () {
        $('#btnsave').val("create-post"); //valuenya menjadi create-post
        $('#id').val(''); //valuenya menjadi kosong
        $('#form-role').trigger("reset"); //mereset semua input dll didalamnya
        $('#modal-judul').html("Add New Role"); //valuenya tambah pegawai baru
        $('#modal-role').modal('show'); //modal tampil
    });
    if ($("#form-role").length > 0) {
        $("#form-role").validate({
            submitHandler: function (form) {
                var actionType = $('#btnsave').val();
                $('#btnsave').html('Sending..');

                $.ajax({
                    data: $('#form-role')
                        .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                    url: "{{ route('role.store') }}", //url simpan data
                    type: "POST", //karena simpan kita pakai method POST
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil 
                        $('#form-role').trigger("reset"); //form reset
                        $('#modal-role').modal('hide'); //modal hide
                        $('#btnsave').html('Simpan'); //tombol simpan
                        var trole = $('#table-role').dataTable(); //inialisasi datatable
                        trole.fnDraw(false); //reset datatable
                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            type: "success",
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                        });
                    },
                    error: function (data) { //jika error tampilkan error pada console
                        console.log('Error:', data);
                        $('#btnsave').html('Simpan');
                    }
                });
            }
        })
    }
    //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
    //ketika class edit-post yang ada pada tag body di klik maka
    $('body').on('click', '.edit-post', function () {
        var data_id = $(this).data('id');
        $.get('role/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit Role");
            $('#btnsave').val("edit-post");
            $('#modal-role').modal('show');

            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#keterangan').val(data.keterangan);
        })
    });

    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });

    //jika tombol hapus pada modal konfirmasi di klik maka
    $('#btndelete').click(function () {
        $.ajax({

            url: "role/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#btndelete').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var trole = $('#table-role').dataTable();
                    trole.fnDraw(false); //reset datatable
                });
                Swal.fire({
                    title: "Good job!",
                    text: "You clicked the button!",
                    type: "success",
                    confirmButtonClass: 'btn btn-primary',
                    buttonsStyling: false,
                });
            }
        })
    });
</script>
@endpush
