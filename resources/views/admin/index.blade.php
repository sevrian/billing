@extends('layout.index')

@section('content')
@include('admin.master.guru._form')
<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">GURU</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Guru</a>
                           </li>
                           <li class="breadcrumb-item active">Daftar Guru
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
       <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="javascript:void(0)" type="button" id="create" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Tambah</a>
       </div>
   </div>
  
   <div class="content-body">
    
       <section id="css-classes" class="card">
           <div class="card-header">
               <h4 class="card-title">Daftar Guru</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="card-text">
                       <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm" id="table-guru">
                            <thead>
                              <tr>
                                
                               <th>Name</th>
                               <th>Alamat</th>
                               <th>Telepon</th>
                               <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                             
                              
                            </tbody>
                          </table>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--/ CSS Classes -->
  
       
   </div>
</div>
@endsection

@push('scripts')
<script>
     $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

    $(document).ready(function() {
    $('#table-guru').DataTable({
        serverSide: true,
        ajax : {
            url:"{{ route ('guru.index')}}",
            type: 'GET'
        },
        columns:[
            { data : 'nama_guru'},
            { data : 'alamat'},
            { data : 'telepon'},
            { data : 'status_aktif'},
            

        ],
        order:[[0,'asc']]
    });
} );
//TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#create').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-guru').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });

</script>
    
@endpush