<?php


if ( isset( $_POST[ 'first_name' ], $_POST[ 'last_name' ], $_POST[ 'email' ], $_POST[ 'phone_number' ], $_POST[ 'department' ], $_POST[ 'hire_date' ] ) ) {

  require( 'config/conn_db.php' );

  $sql_check = "SELECT email FROM `employees` WHERE `email` = '" . $_POST[ 'email' ] . "' ";
  $query_check = mysqli_query( $conn, $sql_check )or die( mysqli_error( $conn ) );

  if ( mysqli_num_rows( $query_check ) == 1 ) {
	  
	  header( 'Location: ./?status=exist' );
	  
  } else {

    $sql = "INSERT INTO `employees` (`first_name`, `last_name`, `email`, `phone_number`, `department`, `hire_date`, `youtube_video`, `created_at`, `updated_at`) 
  VALUES ( '" . $_POST[ 'first_name' ] . "', '" . $_POST[ 'last_name' ] . "', '" . $_POST[ 'email' ] . "', '" . $_POST[ 'phone_number' ] . "', '" . $_POST[ 'department' ] . "', '" . $_POST[ 'hire_date' ] . "', '" . $_POST[ 'youtube_video' ] . "',  CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

    $query = mysqli_query( $conn, $sql )or die( mysqli_error( $conn ) );


    if ( $query ) {

      $last_id = mysqli_insert_id( $conn );
      $target_dir = "uploads/";

      if ( !empty( $_FILES[ "profile_picture" ][ "name" ] ) ) {
        $pic = $_FILES[ "profile_picture" ][ "name" ];
        $pic_tmp = $_FILES[ "profile_picture" ][ "tmp_name" ];
        $pic_name = rand( 0, 9999999999 ) . '-' . str_replace( " ", "-", strtolower( $pic ) );
        move_uploaded_file( $pic_tmp, "$target_dir" . $pic_name );

        $pic_sql = "UPDATE employees SET profile_picture = '" . $pic_name . "' WHERE id = '" . $last_id . "'";
        $pic_query = mysqli_query( $conn, $pic_sql )or die( mysqli_error( $conn ) );

      }

      if ( $pic_query ) {
        header( 'Location: ./?status=done' );
      }


    }


  }


} else {
  header( 'Location: ./' );
}

?>
