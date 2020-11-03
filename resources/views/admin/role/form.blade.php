<div class="modal fade text-left" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
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
                <form id="form-role" name="form-role" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <label>Name Role </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Role" class="form-control validate" id="nama" name="nama"
                            required>
                    </div>
                    <label>Description </label>
                    <div class="form-group">
                        <input type="text" placeholder="Description" class="form-control validate" id="keterangan" name="keterangan"   required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnsave" value="create" >save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>