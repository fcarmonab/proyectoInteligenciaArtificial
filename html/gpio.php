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

if ($_REQUEST['progf3']) {
                               exec("sudo /./home/pi/permiso3.sh");
                               $horaini=$_REQUEST['horaini3'];
                               $minini=$_REQUEST['minini3'];
                               $horafin=$_REQUEST['horafin3'];
                               $minifin=$_REQUEST['minifin3'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/pi/aula3on.sh";
                               $pf=fopen("/etc/cron.d/aula3on","w");
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

                               $path2="/home/pi/aula3off.sh";
                               $pf2=fopen("/etc/cron.d/aula3off","w");
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
                               exec("sudo /home/pi/nopermiso3.sh");

                              }

if ($_REQUEST['progf4']) {
                               exec("sudo /./home/pi/permiso4.sh");
                               $horaini=$_REQUEST['horaini4'];
                               $minini=$_REQUEST['minini4'];
                               $horafin=$_REQUEST['horafin4'];
                               $minifin=$_REQUEST['minifin4'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/pi/aula4on.sh";
                               $pf=fopen("/etc/cron.d/aula4on","w");
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

                               $path2="/home/pi/aula4off.sh";
                               $pf2=fopen("/etc/cron.d/aula4off","w");
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
                               exec("sudo /home/pi/nopermiso4.sh");

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

    if ($_REQUEST['encender9']) {
                                  exec("sudo /./home/pi/fanON.sh");
                                }
    if ($_REQUEST['apagar9'])  {
                                exec("sudo /./home/pi/fanOFF.sh");
                               }

    if ($_REQUEST['encender1']) {
                                 exec("sudo pkill -f sensor2.py");
                                 exec("sudo pkill -f sensor3.py");
                                 exec("sudo pkill -f python");
                                 exec("sudo /./home/pi/allightoff.sh");
                                 exec("sudo /./home/pi/fanOFF.sh");
                                 exec("sudo echo 0 > /home/pi/alarma.txt");
                                 exec("sudo /./home/pi/aula5on.sh");
                                 exec("sudo /./home/pi/aula6off.sh");
                                 exec("sudo /./home/pi/activaralarma.sh");
                                }
    if ($_REQUEST['apagar1']) {
                               exec("sudo pkill -f sensor1.py");
                               exec("sudo echo 1 > /home/pi/alarma.txt");
                               exec("sudo /./home/pi/aula5off.sh");
                               exec("sudo /./home/pi/aula6on.sh");
                               exec("sudo pkill -f python");
                              }

    if ($_REQUEST['encender2']) {
                                 exec("sudo pkill -f sensor1.py");
                                 exec("sudo pkill -f sensor3.py");
                                 exec("sudo pkill -f python");
                                 exec("sudo /./home/pi/fanOFF.sh");
                                 exec("sudo /./home/pi/allightoff.sh");
                                 exec("sudo /./home/pi/activarluces.sh");
                                 }
    if ($_REQUEST['apagar2']) {
                               exec("sudo pkill -f python");
                               exec("sudo /./home/pi/allightoff.sh");
                               exec("sudo pkill -f sensor2.py");
                               }

    if ($_REQUEST['encender3']) {
                                 exec("sudo pkill -f sensor1.py");
                                 exec("sudo pkill -f sensor2.py");
                                 exec("sudo pkill -f python");
                                 exec("sudo /./home/pi/aula5off.sh");
                                 exec("sudo /./home/pi/allightoff.sh");
                                 exec("sudo /./home/pi/fanoff.sh");
                                 exec("sudo /./home/pi/activarfan.sh");
                                }
    if ($_REQUEST['apagar3']) {
                               exec("sudo pkill -f python");
                               exec("sudo /./home/pi/fanOFF.sh");
                               exec("sudo pkill -f sensor3.py");
                              }

    if ($_REQUEST['tomar_foto']){
      exec("sudo /./home/pi/tomar_foto.sh");    
    }
    
    if ($_REQUEST['enviar_email']) {
      exec("sudo /./home/pi/enviar_email.sh");

    }
    if ($_REQUEST['progImagen']) {
      exec("sudo /./home/pi/permisoFoto.sh");
      $horaini=$_REQUEST['horainiIm'];
      $minini=$_REQUEST['mininiIm'];
      $dia="*";
      $mes="*";
      $ano="*";
      $tab=" ";
      $usuario="root";

      $path="/home/pi/tomar_foto.sh";
      $pf=fopen("/etc/cron.d/tomar_foto","w");
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
      exec("sudo /home/pi/nopermisoFoto.sh");
    }

    if ($_REQUEST['progEmail']) {
      exec("sudo /./home/pi/permisoEmail.sh");
                               $horaini=$_REQUEST['horainiEm'];
                               $minini=$_REQUEST['mininiEm'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/pi/enviar_email.sh";
                               $pf=fopen("/etc/cron.d/enviar_email","w");
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

                               exec("sudo /home/pi/nopermisoEmail.sh");
    }
   header("location:index.php");
?>


