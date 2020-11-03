@extends('layout.index')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Produts</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Product</a>
                            </li>
                            <li class="breadcrumb-item active">List Puducts
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="javascript:void(0)" class="btn btn-primary mr-1 mb-1 waves-effect waves-light "
                id="tombol-tambah">Add Products</a>
        </div>
    </div>

    <div class="content-body">

        <section id="css-classes" class="card">
            <div class="card-header">
                <h4 class="card-title">List Produts</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless table-striped " id="table-produk"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Name Products</th>
                                        <th scope="col">Price</th>
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
            {{-- Modal create --}}
            @include('admin.produk.form')
            <div class="modal fade text-left" id="konfirmasi-modal" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel120" aria-hidden="true">
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
            <!--/ CSS Classes -->


    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var tproduk = $('#table-produk').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url('produk') }}',
                type: 'GET'
            },
            columns: [{
                    data: 'DT_RowIndex'
                },

                {
                    data: 'nama_produk'
                },
                {
                    data: 'harga'
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
        $('#form-prduk').trigger("reset"); //mereset semua input dll didalamnya
        $('#modal-judul').html("Add New Produk"); //valuenya tambah pegawai baru
        $('#modal-produk').modal('show'); //modal tampil
    });
    if ($("#form-produk").length > 0) {
        $("#form-produk").validate({
            submitHandler: function (form) {
                var actionType = $('#btnsave').val();
                $('#btnsave').html('Sending..');

                $.ajax({
                    data: $('#form-produk')
                        .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                    url: "{{ route('produk.store') }}", //url simpan data
                    type: "POST", //karena simpan kita pakai method POST
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil 
                        $('#form-produk').trigger("reset"); //form reset
                        $('#modal-produk').modal('hide'); //modal hide
                        $('#btnsave').html('Simpan'); //tombol simpan
                        var tproduk = $('#table-produk').dataTable(); //inialisasi datatable
                        tproduk.fnDraw(false); //reset datatable
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

    $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });

        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#btndelete').click(function () {
            $.ajax({

                url: "produk/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#btndelete').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var tproduk = $('#table-produk').dataTable();
                        tproduk.fnDraw(false); //reset datatable
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
