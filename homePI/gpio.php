<?php

     if ($_REQUEST['progf1']) {
                               exec("sudo /./home/pi/permiso.sh");
                               $horaini=$_REQUEST['horaini'];
                               $minini=$_REQUEST['minini'];
                               $horafin=$_REQUEST['horafin'];
                               $minifin=$_REQUEST['minifin'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/pi/aula1on.sh";
                               $pf=fopen("/etc/cron.d/aula1on","w");
                               fwrite($pf,$minini);
                               fwrite($pf,$tab);
                               fwrite($pf,$horaini);
                               fwrite($pf,$tab);
                               fwrite($pf,$dia);
                               fwrite($pf,$tab);
                               fwrite($pf,$mes);
                               fwrite($pf,$tab);
                               fwrite($pf,$ano);
                               fwrite($pf,$tab);
                               fwrite($pf,$usuario);
                               fwrite($pf,$tab);
                               fwrite($pf,$path);
                               fwrite($pf,"\n");
                               fclose($pf);

                               $path2="/home/pi/aula1off.sh";
                               $pf2=fopen("/etc/cron.d/aula1off","w");
                               fwrite($pf2,$minifin);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$horafin);
                               fwrite($pf2,$tab); 
                               fwrite($pf2,$dia);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$mes);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$ano);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$usuario);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$path2);
                               fwrite($pf2,"\n");
                               fclose($pf2);
                               exec("sudo /home/pi/nopermiso.sh");

                              }

if ($_REQUEST['progf2']) {
                               exec("sudo /./home/pi/permiso2.sh");
                               $horaini=$_REQUEST['horaini2'];
                               $minini=$_REQUEST['minini2'];
                               $horafin=$_REQUEST['horafin2'];
                               $minifin=$_REQUEST['minifin2'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/pi/aula2on.sh";
                               $pf=fopen("/etc/cron.d/aula2on","w");
                               fwrite($pf,$minini);
                               fwrite($pf,$tab);
                               fwrite($pf,$horaini);
                               fwrite($pf,$tab);
                               fwrite($pf,$dia);
                               fwrite($pf,$tab);
                               fwrite($pf,$mes);
                               fwrite($pf,$tab);
                               fwrite($pf,$ano);
                               fwrite($pf,$tab);
                               fwrite($pf,$usuario);
                               fwrite($pf,$tab);
                               fwrite($pf,$path);
                               fwrite($pf,"\n");
                               fclose($pf);

                               $path2="/home/pi/aula2off.sh";
                               $pf2=fopen("/etc/cron.d/aula2off","w");
                               fwrite($pf2,$minifin);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$horafin);
                               fwrite($pf2,$tab); 
                               fwrite($pf2,$dia);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$mes);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$ano);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$usuario);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$path2);
                               fwrite($pf2,"\n");
                               fclose($pf2);
                               exec("sudo /home/pi/nopermiso2.sh");

                              }



     if ($_REQUEST['encender17']) {
                                   exec("sudo /./home/pi/aula1on.sh");
                                  }

     if ($_REQUEST['apagar17'])   {
                                   exec("sudo /./home/pi/aula1off.sh");
                                  }

     if ($_REQUEST['encender27']) {
                                   exec("sudo /./home/pi/aula2on.sh");
                                  }

     if ($_REQUEST['apagar27']) {
                                 exec("sudo /./home/pi/aula2off.sh");
                                }
     
     if ($_REQUEST['encender22']) {
                                   exec("sudo /./home/pi/aula3on.sh");
                                  }

     if ($_REQUEST['apagar22'])  {
                                  exec("sudo /./home/pi/aula3off.sh");
                                 }

     if ($_REQUEST['encender18']) {
                                   exec("sudo /./home/pi/aula4on.sh");
                                  }
   
     if ($_REQUEST['apagar18']) {
                                 exec("sudo /./home/pi/aula4off.sh");
                                }

    if ($_REQUEST['encender23']) {
                                  exec("sudo /./home/pi/aula5on.sh");
                                 }

    
    if ($_REQUEST['apagar23']) {
                                exec("sudo /./home/pi/aula5off.sh");
                               }
    
    if ($_REQUEST['encender24']) {
                                  exec("sudo /./home/pi/aula6on.sh");
                                 }
    
    if ($_REQUEST['apagar24'])  {
                                 exec("sudo /./home/pi/aula6off.sh");
                                }

   header("location:index.php");
?>
  

