<html>
     <head><title>Micro A</title>
     </head>
            <style type="text/css">
                                   .div1
                                       {
                                       width: 28%;
                                       height: 70px;
                                       background-color:#1E90FF;
                                       margin: 0 auto;
                                       color: white;
                                       }
                                    .div2
                                       {
                                       width: 28%;
                                       height: 550px;
                                       background-color:#A52A2A;
                                       margin: 0 auto;
                                       color: white;
                                       font-weight: bold;
                                       }

          </style>

<body>
      <div class="div1" align="center" style="background-color:lightwhite">
           <h2>ITEE SMARTHOME 2018 </h2>
           <?php
                $timezone=-24;
                $hora=gmdate("H:i:s", time()+3600*($timezone+date("I")));
                
                print "<h3>" . $hora . "</h3>"
           ?>
           </div>
           
           <div class="div2" align="center">
           <?php
                 echo '<img src="logo.png"\>';
           ?> 

           <form method="post" action="gpio.php">
           FOCO1 <input type="submit" id="encender17" name="encender17" value="Encender">
                 <input type="submit" id="apagar17" name="apagar17" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           FOCO2 <input type="submit" id="encender27" name="encender27" value="Encender">
                 <input type="submit" id="apagar27" name="apagar27" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           FOCO3 <input type="submit" id="encender22" name="encender22" value="Encender">
                 <input type="submit" id="apagar22" name="apagar22" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           FOCO4 <input type="submit" id="encender18" name="encender18" value="Encender"> 
                  <input type="submit" id="apagar18" name="apagar18" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           FAN 1 <input type="submit" id="encender9" name="encender9" value="Encender">
                 <input type="submit" id="apagar9" name="apagar9" value="Apagar">
           
           <form method="post" action="gpio.php">
           <br></br>
           FOCO1 HI <input type="text" id="horaini" name="horaini" value="" size="2">
           MI <input type="text" id="minini" name="minini" value="" size="2">
           HF <input type="text" id="horafin" name="horafin" value="" size="2">
           MF <input type="text" id="minifin" name="minifin" value="" size="2">
              <input type="submit" id="progf1" name="progf1" value="Apply">
          
          <form method="post" action="gpio.php">
          <br></br>
          FOCO2 HI <input type="text" id="horaini2" name="horaini2" value="" size="2">
          MI <input type="text" id="minini2" name="minini2" value="" size="2">
          HF <input type="text" id="horafin2" name="horafin2" value="" size="2">
          MF <input type="text" id="minifin2" name="minifin2" value="" size="2">
             <input type="submit" id="progf2" name="progf2" value="Apply">

          <form method="post" action="gpio.php">
          <br></br>
          FOCO3 HI <input type="text" id="horaini3" name="horaini3" value="" size="2">
          MI <input type="text" id="minini3" name="minini3" value="" size="2">
          HF <input type="text" id="horafin3" name="horafin3" value="" size="2">
          MF <input type="text" id="minifin3" name="minifin3" value="" size="2">
             <input type="submit" id="progf3" name="progf3" value="Apply">
          
          <form method="post" action="gpio.php">
          <br></br>
          FOCO4 HI <input type="text" id="horaini4" name="horaini4" value="" size="2">
          MI <input type="text" id="minini4" name="minini4" value="" size="2">
          HF <input type="text" id="horafin4" name="horafin4" value="" size="2">
          MF <input type="text" id="minifin4" name="minifin4" value="" size="2">
             <input type="submit" id="progf4" name="progf4" value="Apply">
         <br></br>
         <form method="post" action="gpio.php">
         SENSOR-ALARM <input type="submit" id="encender1" name="encender1" value="Activar">
                       <input type="submit" id="apagar1" name="apagar1" value="Desactivar">
         <br></br>
         <form method="post" action="gpio.php">
         SENSOR-LUCES <input type="submit" id="encender2" name="encender2" value="Activar">
                       <input type="submit" id="apagar2" name="apagar2" value="Desactivar">
         <br></br>
         <form method="post" action="gpio.php">
         SENSOR-FAN <input type="submit" id="encender3" name="encender3" value="Activar">
                    <input type="submit" id="apagar3" name="apagar3" value="Desactivar">
         <br></br>


      </div>
</body>
</html>




          
          
