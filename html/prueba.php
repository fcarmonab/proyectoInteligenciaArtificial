<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplicativo</title>
</head>

<body>
<?php
$resultado=$_REQUEST['combo'];
$apagado=$_REQUEST['combo2'];
if ($resultado== 1){
    exec ("sudo python3 /var/www/html/instruccion1.py");
    }
  if($resultado==2){ 
  exec ("sudo python3 /var/www/html/instruccion2.py");
   }
  if($resultado==3){
  exec ("sudo python3 /var/www/html/instruccion3.py");      
    }
  if($resultado==4){
  exec ("sudo python3 /var/www/html/instruccion4.py");
  
  }
  if($resultado==5){
  exec ("sudo python3 /var/www/html/instruccion5.py");
  }
  if ($apagado==1){
	  exec ("/./var/www/foco1.sh");
      }
  header('location: inicio.html');
?>  
</body>
</html>
