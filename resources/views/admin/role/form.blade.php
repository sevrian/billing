<div class="modal fade text-left" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form method="POST" action="">
                @csrf
                {{-- @csrf {{ method_field('POST') }} --}}
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <label>Name Role </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Role" class="form-control" id="nama" name="nama" required>
                    </div>
                    <label>Keterangan </label>
                    <div class="form-group">
                        <input type="text" placeholder="Keterangan" class="form-control" id="keterangan"
                            name="keterangan" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>