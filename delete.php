<?php


if ( isset( $_GET[ 'emp_id' ], $_GET[ 'del' ] ) && !empty( $_GET[ 'emp_id' ] ) && $_GET[ 'del' ] == 'true' ) {

  require( 'config/conn_db.php' );

  $sql = "DELETE from employees WHERE `id` = '" . $_GET[ 'emp_id' ] . "' ";
  $query = mysqli_query( $conn, $sql )or die( mysqli_error( $conn ) );

  if ( $query ) {
    header( 'Location: ./?status=delete' );
  }

} else {
  header( 'Location: ./' );
}

?>
