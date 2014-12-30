<html>
<h1>Deploy Demo Reloaded!</h1>
<p><img src = 'https://s3.eu-central-1.amazonaws.com/deploydemo/cloudHelpDesk.jpg'></p>
<?php
 require 'opsworks.php';
 $opsworks = new OpsWorks();
 print $opsworks->db->host;
?>
</html>
