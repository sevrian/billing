<div class="modal fade text-left" id="tambah-edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="form-tambah-edit" name="form-tambah-edit">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal-judul"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <label>Name </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" id="name"
                            name="name" value="" required>
                    </div>
                    <label>Email </label>
                    <div class="form-group">
                        <div class="controls">
                            <input type="email" name="email" id="email" class="form-control" data-validation-required-message="Must be a valid email" placeholder="Email" value="" required>
                        </div>
                    </div>
                    <label>Role </label>
                
                        <fieldset class="form-group">
                            <select class="custom-select" id="role" name="role">
                                <option selected="">Open this role</option>
                                <option value="admin">Admin</option>
                                <option value="superadmin">Super Admin</option>
                                
                            </select>
                        </fieldset>
                        
                    <label>Password </label>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password"  id="password" name="password" class="form-control"
                                data-validation-required-message="This field is required" placeholder="Password">
                        </div>

                    </div>
                    <label>Repeat Password </label>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password" name="password2" data-validation-match-match="password"
                                class="form-control" data-validation-required-message="Repeat password must match"
                                placeholder="Repeat Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="tombol-simpan" value="create">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>