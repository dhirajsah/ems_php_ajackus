<?php // error_reporting(0);

date_default_timezone_set( 'Asia/Kolkata' );

if ( $_SERVER[ 'HTTP_HOST' ] == "localhost" ) {

  define( 'MDB_SERVER', 'localhost' );
  define( 'MDB_USERNAME', 'root' );
  define( 'MDB_PASSWORD', '' );
  define( 'MDB_DATABASE', 'ajackus' );
  define( "BASE_URL", "http://localhost/ajackus/" );
} else {
  define( 'MDB_SERVER', 'localhost' );
  define( 'MDB_DATABASE', 'cbiaaqcs_ajackus' );
  define( 'MDB_USERNAME', 'cbiaaqcs_ajackus' );
  define( 'MDB_PASSWORD', 'mhov2avuxz4f' );
  define( "BASE_URL", "https://webexwebapps.com/ajackus/" );
}


$conn = mysqli_connect( MDB_SERVER, MDB_USERNAME, MDB_PASSWORD, MDB_DATABASE );

if ( !$conn ) {
  echo "Unable to connect database" . mysqli_error( $conn );
  die;
} else {
  // "Database connected successfully"; 
}

mysqli_select_db( $conn, MDB_DATABASE );

?>