{{-- modaladd --}}
<div class="modal fade text-left" id="modal-produk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modal-judul"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="form-produk" name="form-produk" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <label>Name Products </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Produk" class="form-control validate" id="nama_produk" name="nama_produk"
                            required>
                    </div>
                    <label>Harga </label>
                    <div class="form-group">
                        <input type="text" placeholder="Price" class="form-control validate" id="harga" name="harga"   required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnsave" value="create" >save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

{{-- modaledit --}}
{{-- <div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="form-produk-edit" method="post" action="{{ route('produk.store') }}"">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <label>Name Products </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Produk" class="form-control validate" name="nama_produk"
                            value="" required>
                    </div>
                    <label>Harga </label>
                    <div class="form-group">
                        <input type="text" placeholder="Price" class="form-control validate" name="harga" value="" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div> --}}
{{-- modaledit --}}
{{-- <div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form id="form-tambah-edit" name="form-tambah-edit" >
                
                    <div class="modal-header" id="modal-judul">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <label>Name Products </label>
                        <div class="form-group">
                            <input type="text" placeholder="Name Role" class="form-control" id="nama_produk" name="nama_produk" value="" required>
                        </div>
                        <label>Harga </label>
                        <div class="form-group">
                            <input type="text" placeholder="Price" class="form-control" id="harga"
                                name="harga" value="" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="tombol-simpan" value="create">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div> --}}