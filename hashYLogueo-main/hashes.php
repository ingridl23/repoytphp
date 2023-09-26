<?php
$clave = "123456";  
echo "clave".$clave;
echo "<br><br>";
echo "php ". password_hash ($clave , PASSWORD_DEFAULT );  
echo "<br><br>";
echo "php ". password_hash ($clave , PASSWORD_DEFAULT );  
echo "<br><br>";
echo "BCRYPT".password_hash($clave, PASSWORD_BCRYPT);
echo "<br><br>";
echo "BCRYPT".password_hash($clave, PASSWORD_BCRYPT);
echo "<br><br>";
echo "md5: ".md5($clave);
echo "<br><br>";
echo "md5: ".md5($clave);
echo "<br><br>";


?>