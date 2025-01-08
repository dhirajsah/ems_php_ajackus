<?php require('config/conn_db.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Employee - Ajackus</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="">
<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/vendor/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include('header.php') ?>
<main>
  <section>
    <div class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Add Employee</h2>
          </div>
        </div>
        
        <!---->
        <div class="employee_form">
          <form action="save_form.php" method="post" enctype="multipart/form-data" id="employee_form">
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" id="first_name" name="first_name" required class="form-control">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" id="last_name" name="last_name" required class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required class="form-control">
            </div>
            <div class="form-group">
              <label for="phone_number">Phone Number:</label>
              <input type="text" id="phone_number" name="phone_number" required class="form-control" maxlength="10" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" pattern="[6-9]{1}[0-9]{9}" title="Mobile no must start with 6-9 and remaining 9 digit with 0-9">
            </div>
            <div class="form-group">
              <label for="department">Department:</label>
              <select id="department" name="department" required class="form-control">
                <option value="">Select Department</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Sales">Sales</option>
                <option value="Marketing">Marketing</option>
              </select>
            </div>
            <div class="form-group">
              <label for="hire_date">Hire Date:</label>
              <input type="date" id="hire_date" name="hire_date" required class="form-control">
            </div>
            <div class="form-group">
              <label for="profile_picture">Profile Picture:</label>
              <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required class="form-control">
            </div>
            <div class="form-group">
              <label for="youtube_video">YouTube Video URL:</label>
              <input type="url" id="youtube_video" name="youtube_video" class="form-control" required placeholder="Please enter youtube url only " pattern="http(s?)(:\/\/)((www.)?)([youtube]+)(.com(/?))">
            </div>
            <button type="submit" class="btn btn-success">Save Employee</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!--Script--> 
<script src="assets/vendor/jquery.min.js"></script> 
<script src="assets/vendor/bootstrap5/js/bootstrap.min.js"></script> 
<script>
$('#employee_form').on('submit', function (event) {

  let isValid = true;

  var phone_number = $('#phone_number').val();
  if (phone_number.length != 10) {
    alert('Mobile no must start with 6-9 and remaining 9 digit with 0-9');
    isValid = false;
  }

  //Email validation
  const email_id = document.getElementById("email");
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email_id.value)) {
    alert('Please enter valid email id');
    isValid = false;
  }

  // YouTube URL validation
//  const youtube_video = document.getElementById("youtube_video");
//  const youtubePattern = /^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+$/;
//  const youtubePattern2 = "http(s?)(:\/\/)((www.)?)([youtube]+)(.com)";
//	
//  if (!youtubePattern2.test(youtube_video.value)) {
//    alert('Please enter youtube url only');
//    isValid = false;
//  }
//
//  // Prevent form submission if any validation fails
//  if (!isValid) {
//    event.preventDefault();
//  }

});

</script>
</body>
</htm>
