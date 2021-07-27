<?php



session_start();
if(!(isset($_SESSION['password']))){
	header('Location:login.php');
}



    
    include('C:/xampp/htdocs/hatly/Connection/connection.php');	

    $id = $_GET['id'];

    $sql = "DELETE FROM checkout where id = '$id'";

    $con->exec($sql);

    header('Location: checkout_2.php');

    $con=null;    

?>