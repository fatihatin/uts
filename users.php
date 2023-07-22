<?php
require_once 'konek.php';

require_once 'header.php';

 echo "<div class='container'>";

    if(isset($_POST['delete'])) {
        $sql ="DELETE FROM users WHERE user-id=" .$_POST['userid'];
        if ($con->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Successfully delete user</div>";
        }
    }
    $sql = "SELECT * FORM users";
    $result =$con->query($sql);

    if($result->num_rows > 0){
?>
}