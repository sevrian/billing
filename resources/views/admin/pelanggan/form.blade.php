<div class="modal fade text-left" id="tambah-edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="form-tambah-edit" name="form-tambah-edit" >
               
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-judul"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <label>Customer ID</label>
                    <div class="form-group">
                        <input type="text" placeholder="Cutomer_id" class="form-control" id="user_id" name="user_id" value="" required>
                    </div>
                    <label>Name Customer </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name " class="form-control" id="nama" name="nama" value="" required>
                    </div>
                    <label>Address </label>
                    <div class="form-group">
                        <input type="text" placeholder="Address" class="form-control" id="alamat"
                            name="alamat" value="" required>
                    </div>
                    <label>Phone </label>
                    <div class="form-group">
                        <input type="text" placeholder="Phone" class="form-control" id="telepon"
                            name="telepon" value="" required>
                    </div>
                    <label>Email </label>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" id="email"
                            name="email" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="tombol-simpan" value="create">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>