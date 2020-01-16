<?php  
session_start();
if($_SESSION['status_login'] == ""){
	header("location:../pertamina/login");
}
include '../../config/dbconfig.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php  
	include '../../views/v_home/head.php';
    include '../../views/v_home/body.php';
    include '../../views/v_home/footer.php';
?>

</html>