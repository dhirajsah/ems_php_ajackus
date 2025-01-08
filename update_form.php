<?php


if ( isset( $_POST[ 'emp_id' ], $_POST[ 'first_name' ], $_POST[ 'last_name' ], $_POST[ 'email' ], $_POST[ 'phone_number' ], $_POST[ 'department' ], $_POST[ 'hire_date' ] ) ) {

  require( 'config/conn_db.php' );

   $sql = "UPDATE `employees` SET 
  `first_name` = '" . $_POST[ 'first_name' ] . "', 
  `last_name` = '" . $_POST[ 'last_name' ] . "', 
  `email` = '" . $_POST[ 'email' ] . "', 
  `phone_number` = '" . $_POST[ 'phone_number' ] . "', 
  `department` = '" . $_POST[ 'department' ] . "', 
  `hire_date` = '" . $_POST[ 'hire_date' ] . "', 
  `youtube_video` = '" . $_POST[ 'youtube_video' ] . "', `updated_at` = CURRENT_TIMESTAMP WHERE `id` = '" . $_POST[ 'emp_id' ] . "' ";

  $query = mysqli_query( $conn, $sql )or die( mysqli_error( $conn ) );


  if ( $query ) {

    $target_dir = "uploads/";

    if ( !empty( $_FILES[ "profile_picture" ][ "name" ] ) ) {
      $pic = $_FILES[ "profile_picture" ][ "name" ];
      $pic_tmp = $_FILES[ "profile_picture" ][ "tmp_name" ];
      $pic_name = rand( 0, 9999999999 ) . '-' . str_replace( " ", "-", strtolower( $pic ) );
      move_uploaded_file( $pic_tmp, "$target_dir" . $pic_name );

      $pic_sql = "UPDATE employees SET profile_picture = '" . $pic_name . "' WHERE id = '" . $_POST[ 'emp_id' ] . "'";
      $pic_query = mysqli_query( $conn, $pic_sql )or die( mysqli_error( $conn ) );

    }

    if ( $query ) {
      header( 'Location: ./?status=updated' );
    }

  }

} else {
  header( 'Location: ./' );
}

?>
