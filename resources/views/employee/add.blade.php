{{-- Add Employee --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" id="close-add" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id = "addform">
          <div class="form-col">
            <div class="mt-1">
              <label for="validationDefault03">Username</label>
              <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Password</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Confirm Passsword</label>
              <input type="password" class="form-control" id="password_confirmation" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">First Name</label>
              <input type="text" class="form-control" id="first_name" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Last Name</label>
              <input type="text" class="form-control" id="last_name" required>
            </div>
            <div class="mt-5">
              <label for="validationDefault03">Phone Number</label>
              <input type="text" class="form-control" id="phone_number" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="close-add" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
            <button class="btn btn-md mt-5 text-white add-btn" type="submit">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>