<?php 
session_start();
if(isset($_SESSION['status_login']) == "login"){
	header("location:../pertamina/home");
}
include '../../config/dbconfig.php';

?>

<!DOCTYPE html>
<?php  
  include '../../views/v_login/head.php';
?>

<body>
  <?php  
    include '../../views/v_login/left_body.php';
  	include '../../views/v_login/right_body.php';
  ?>
</body>

</html>