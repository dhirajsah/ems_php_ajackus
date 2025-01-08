$(document).ready(function () {

  var table = $('#dataTable').DataTable({
    "pageLength": 15
  });

  //Delete function
  $('.delete_imp').on('click', function () {
    var emp_id = this.getAttribute('data-emp');
    if (confirm("Are you sure you want to delete the employee?") == true) {
      window.location.href = "delete.php?del=true&emp_id=" + emp_id;
    }
  });


});
