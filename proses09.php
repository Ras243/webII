<?php 
if(isset($_POST['proses'])) {
    $saran = $_POST['saran'];
    echo "Kritik / Saran Anda adalah : <font color='blue'><b>$saran</b></font>";
}
?>
