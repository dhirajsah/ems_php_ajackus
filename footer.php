<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content"> 
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="modal-body">
          <h4 class="modal-title">Search Employee</h4>
          <hr>
          <form action="search.php" method="GET">
            <div class="form-group mb-3">
              <label for="first_name">First Name:</label>
              <input type="text" id="first_name" name="first_name" required class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="last_name">Last Name:</label>
              <input type="text" id="last_name" name="last_name"  class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email"  class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="department">Department:</label>
              <select id="department" name="department"  class="form-control">
                <option value="">Select Department</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Sales">Sales</option>
                <option value="Marketing">Marketing</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Save Employee</button>
          </form>
        </div>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
