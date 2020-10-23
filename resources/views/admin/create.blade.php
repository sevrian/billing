@extends('layout.index')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ url ('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endpush

@section('content')

<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">Guru</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Guru</a>
                           </li>
                           <li class="breadcrumb-item active">Form Guru
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
     
   </div>
   <div class="content-body">
  
    <section id="css-classes" class="card">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Maaf!</strong> Data yang anda masukan sudah tepakai.<br><br>
        </div>
        @endif
        <div class="card-header">
            <h4 class="card-title">Form Guru</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                 <div class="col-12">
                    <div class="card">
                       
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" id="form-guru" name="form-guru">
                                    <div class="form-body">
                                        <div class="row">
                                            <input type="hidden" name="id" id="id">

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIP</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="nip" placeholder="NIP">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Jenis PTK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="jenisptk_id" placeholder="Jenis PTK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Agama</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="Agama_id" placeholder="Agama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Negara</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="negara_id" placeholder="Negara">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nama Guru</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" i class="form-control" name="nama_guru" placeholder="Nama Guru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tempat Lahir</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggl Lahir">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Lahir</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control pickadate-months-year picker__input picker__input--active" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Jenis Kelamin</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <fieldset class="form-group">
                                                            <select class="custom-select" name="jenis_kelamin">
                                                                
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number"class="form-control" name="nik" placeholder="NIK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NUPTK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="nuptk" placeholder="NUPTK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Alamat</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="alamat" placeholder="Alamat">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Telepon</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="telepon" placeholder="Telepon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="email"  class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Status Keaktifan</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <fieldset class="form-group">
                                                            <select class="custom-select" name="status_aktif">
                                                                
                                                                <option value="Pria">Aktif</option>
                                                                <option value="Wanita">Tidak Aktif</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Foto</span>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <fieldset class="form-group">
                                                           
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="foto">
                                                                <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Password</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password"  class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 offset-md-10">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" id="tombol-simpan"
                                                value="create">Submit</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
       <!--/ CSS Classes -->
  </section>
       
   </div>
</div>
@endsection
@push('js')
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>

@endpush
@push('scripts')
<script type="text/javascript">
    $(function () {
        $('.pickadate-months-year').pickadate({
            labelMonthNext: 'Go to the next month',
            labelMonthPrev: 'Go to the previous month',
            labelMonthSelect: 'Pick a month from the dropdown',
            labelYearSelect: 'Pick a year from the dropdown',
            selectMonths: true,
            selectYears: true
        });
    });
     //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#from-guru").length > 0) {
            $("#form-guru").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');

                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('guru.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('.form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table-guru').dataTable(); //inialisasi datatable
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
</script>
@endpush