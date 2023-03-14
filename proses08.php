<?php 
if(isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "film kartun Favorit Anda adalah: <font color='blue'><b>$film</b></font>";
}
?>