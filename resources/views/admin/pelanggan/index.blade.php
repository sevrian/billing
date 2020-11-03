@extends('layout.index')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Customes</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Customes</a>
                            </li>
                            <li class="breadcrumb-item active">List Customes
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="javascript:void(0)" type="button" data-toggle="addPelanggan" id="tombol-tambah"
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">Add Customes</a>
        </div>
    </div>

    <div class="content-body">

        <section id="css-classes" class="card">
            <div class="card-header">
                <h4 class="card-title">List Customes</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless table-striped " id="table-pelanggan">
                                <thead>
                                    <tr>
                                       
                                        <th scope="col">Customer ID</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col" width="200px">Action</th>
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
            @include('admin.pelanggan.form')
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
                           <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
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

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
      
      var tpelangggan = $('#table-pelanggan').DataTable({
        serverSide: true,
        ajax: {
            url: '/admin/pelanggan',
            type: 'GET' 
        },
        columns: [
              {data: 'DT_RowIndex', orderable:false, searchable: false},
              {data: 'kelas_name'},
              {data: 'kelas_description'},
              {data: 'action'},
              ]
      });
  
      $("#form-kelas").validate({
        submitHandler: function(form) {
          var modal = '#modal-add';
          $.ajax({
            url: '{{ url("master/kelas") }}',
            type: 'POST',
            data: $(form).serialize(),
          })
          .done(function() { // selesai dan berhasil
            swal("Good job!", "You clicked the button!", "success") // alert success
            $(form)[0].reset(); // reset form
            tdatatable.ajax.reload(null, false); // reload datatable
            $(modal).modal('close'); // tutup modal
          })
          .fail(function() {
            console.log("error");
          });
  
        }
      });
  
      $('#kelas-list-datatable').on('click', '.btn-delete', function(event) {
        var id = $(this).data('id');
        event.preventDefault();
        /* Act on the event */
        // Ditanyain dulu usernya mau beneran delete data nya nggak.
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          icon: 'warning',
          buttons: {
            cancel: true,
            delete: 'Yes, Delete It'
          }
        }).then(function (confirm) { // proses confirm
          if (confirm) { // Bila oke post ajax ke url delete nya
            // Ajax Post Delete
            $.ajax({
              url: '{{ url("master/kelas") }}' + '/' + id,
              type: 'DELETE',
            })
            .done(function() { // Kalau ajax nya success
              swal("Good job!", "You clicked the button!", "success") // alert success
              tdatatable.ajax.reload(null, false); // reload datatable
            })
            .fail(function() { // Kalau ajax nya gagal
              console.log("error");
            });
  
          }
        })
      });
  
      $('#kelas-list-datatable').on('click', '.btn-edit', function(event) {
        event.preventDefault();
        /* Act on the event */
        var id = $(this).data('id');
        var modal = '#modal-edit';
        $.ajax({
            url: '{{ url("master/kelas") }}' + '/' + id,
            type: 'GET',
          })
          .done(function(data) { // selesai dan berhasil
            // jika data ditemukan
            // Isi data ke form
            $('#form-kelas-edit [name="kelas_id"]').val(data.id);
            $('#form-kelas-edit [name="kelas_name"]').val(data.kelas_name);
            $('#form-kelas-edit [name="kelas_description"]').val(data.kelas_description);
  
            M.updateTextFields(); // biar label nya nggak overlaping
            // Tampilkan form
            $(modal).modal('open')
          })
          .fail(function() {
            console.log("error");
          });
      });
  
      $("#form-kelas-edit").validate({
        submitHandler: function(form) {
          var modal = '#modal-edit';
          var id = $('#form-kelas-edit [name="kelas_id"]').val();
          $.ajax({
            url: '{{ url("master/kelas") }}' + '/' + id,
            type: 'PUT',
            data: $(form).serialize(),
          })
          .done(function() { // selesai dan berhasil
            swal("Good job!", "You clicked the button!", "success") // alert success
            $(form)[0].reset(); // reset form
            tdatatable.ajax.reload(null, false); // reload datatable
            $(modal).modal('close'); // tutup modal
          })
          .fail(function() {
            console.log("error");
          });
  
        }
      });
    });
  </script>
@endpush