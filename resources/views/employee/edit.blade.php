{{-- Edit Employee --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" id="close-edit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editform">
          <div class="form-col">
            <input type="hidden" id="euid" value="">
            <div class="mt-1">
              <label for="validationDefault03">Nama</label>
              <input type="text" class="form-control" id="enama" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Email</label>
              <input type="email" class="form-control" id="eemail" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Password</label>
              <input type="email" class="form-control" id="epassword">
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Password Confirmation</label>
              <input type="email" class="form-control" id="epassword_confirmation">
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Posisi</label>
              <select id="erole" class="form-control" required>
                @if(Route::currentRouteName() == "route.admin.user")
                <option value="1">Admin</option>
                <option value="2">Owner</option>
                @endif
                <option value="3">Member</option>
                <option value="4">Cashier</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
          <button class="btn btn-md mt-5 text-white add-btn" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>