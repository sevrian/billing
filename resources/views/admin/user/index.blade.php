@extends('layout.index')
@push('css')
<link rel="stylesheet" type="text/css" href="{{url('app-assets/css/plugins/forms/validation/form-validation.css')}}">
@endpush

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">User Admin</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Users</a>
                            </li>
                            <li class="breadcrumb-item active">List Users
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="javascript:void(0)" type="button" data-toggle="addProduk" id="tombol-tambah"
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">Add Users</a>
        </div>
    </div>

    <div class="content-body">

        <section id="css-classes" class="card">
            <div class="card-header">
                <h4 class="card-title">List Users</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless table-striped " id="table_admin">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Name User</th>
                                        <th scope="col">Role</th>
                                        <th scope="col-2" width="250px" >Action</th>
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
            @include('admin.user.form')
            <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">PERHATIAN</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <p><b>Jika menghapus data maka</b></p>
                           <p>*data ini tersebut hilang selamanya, apakah anda yakin?</p>
                       </div>
                       <div class="modal-footer bg-whitesmoke br">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                               Data</button>
                       </div>
                   </div>
               </div>
           </div>
        </section>
        <!--/ CSS Classes -->


    </div>
</div>
@endsection

@push('js')
<script src="{{ url ('app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
@endpush
@push('scripts')
<script>
    //CSRF TOKEN PADA HEADER
    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //jalankan function load_data diawal agar data ter-load
        load_data();

       

        //LOAD DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        //load data menggunakan parameter tanggal dari dan tanggal hingga
        function load_data(from_date = '', to_date = '') {
            $('#table_admin').DataTable({
                //  processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ route('admin.index') }}",
                    type: 'GET',
                    data: {
                        from_date: from_date,
                        to_date: to_date
                    } //jangan lupa kirim parameter tanggal 
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                  
                    {
                        data: 'role',
                        name: 'role'
                    },
                  
                    {
                        data: 'action',
                        name: 'action'
                    },

                ],
                order: [
                    [0, 'asc']
                ]
            });
        }
    });

    //TOMBOL TAMBAH DATA
    //jika tombol-tambah diklik maka
    $('#tombol-tambah').click(function () {
        $('#button-simpan').val("create-post"); //valuenya menjadi create-post
        $('#id').val(''); //valuenya menjadi kosong
        $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
        $('#modal-judul').html("Add New User"); //valuenya tambah pegawai baru
        $('#tambah-edit-modal').modal('show'); //modal tampil
    });


    //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
    //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
    //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
    if ($("#form-tambah-edit").length > 0) {
        $("#form-tambah-edit").validate({
            submitHandler: function (form) {
                var actionType = $('#tombol-simpan').val();
                $('#tombol-simpan').html('Sending..');

                $.ajax({
                    data: $('#form-tambah-edit')
                        .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                    url: "{{ route('admin.store') }}", //url simpan data
                    type: "POST", //karena simpan kita pakai method POST
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil 
                        $('#form-tambah-edit').trigger("reset"); //form reset
                        $('#tambah-edit-modal').modal('hide'); //modal hide
                        $('#tombol-simpan').html('Simpan'); //tombol simpan
                        var oTable = $('#table_admin')
                            .dataTable(); //inialisasi datatable
                        oTable.fnDraw(false); //reset datatable
                        iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                            title: 'Data Berhasil Disimpan',
                            message: '{{ Session('
                            success ')}}',
                            position: 'bottomRight'
                        });
                    },
                    error: function (data) { //jika error tampilkan error pada console
                        console.log('Error:', data);
                        $('#tombol-simpan').html('Simpan');
                    }
                });
            }
        })
    }

    //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
    //ketika class edit-post yang ada pada tag body di klik maka
    $('body').on('click', '.edit-post', function () {
        var data_id = $(this).data('id');
        $.get('admin/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit User");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit-modal').modal('show');

            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#password').val(data.password);
            $('#role').val(data.role);
            $('#email').val(data.email);
            
        })
    });

    //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });

    //jika tombol hapus pada modal konfirmasi di klik maka
    $('#tombol-hapus').click(function () {
        $.ajax({

            url: "admin/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_admin').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
                iziToast.warning({ //tampilkan izitoast warning
                    title: 'Data Berhasil Dihapus',
                    message: '{{ Session('
                    delete ')}}',
                    position: 'bottomRight'
                });
            }
        })
    });
</script>
@endpush

