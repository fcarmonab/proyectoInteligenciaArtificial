<html>
     <head><title>Micro A</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     </head>
            <style type="text/css">
                                   .div1
                                       {
                                       width: auto;
                                       height: 70px;
                                       background-color:white;
                                       margin: 0 auto;
                                       color: black;
                                       }
                                    .div2
                                       {
                                       width: auto;
                                       height: auto;
                                       background-color:Gray;
                                       margin: 0 auto;
                                       color: white;
                                       font-weight: bold;
                                       }

          </style>

<body>
      <div class="div1" align="center" style="background-color:lightwhite">
      <br>
           <h2>Aplicación Inteligencia Artificial</h2>
           <h3>Grupo #1</h3>
           
           <?php
                $timezone=-24;
                $hora=gmdate("H:i:s", time()+3600*($timezone-6+date("I")));
                
                print "<h3>" . $hora . "</h3>"
           ?>
           </div>
           <br>
           <br>      
           <br>
           <br>                         
           <div class="div2" align="center">
           <br> 
           <?php
                 echo '<img src="uth-2138575860" width="120" height="90"\>';
           ?> 

           <form method="post" action="gpio.php">
           <br> 
           Tomar Imagen <input type="submit" id="tomar_foto" name="tomar_foto" value="Tomar foto">
           <br></br>
           Enviar correo <input type="submit" id="enviar_email" name="enviar_email" value="Enviar email">
           <br></br>
           Programar Toma de Imagen 
           <br>
           HI <input type="text" id="horainiIm" name="horainiIm" value="" size="2">
           MI <input type="text" id="mininiIm" name="mininiIm" value="" size="2">
              <input type="submit" id="progImagen" name="progImagen" value="Apply">      
            <br></br>
            Programar Envio de Correo 
           <br>
           HI <input type="text" id="horainiEm" name="horainiEm" value="" size="2">
           MI <input type="text" id="mininiEm" name="mininiEm" value="" size="2">
              <input type="submit" id="progEmail" name="progEmail" value="Apply">      
            <br></br>      
           GPIO #17 <input type="submit" id="encender17" name="encender17" value="Encender">
                 <input type="submit" id="apagar17" name="apagar17" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           GPIO #27 <input type="submit" id="encender27" name="encender27" value="Encender">
                 <input type="submit" id="apagar27" name="apagar27" value="Apagar">
           <br></br>
           <form method="post" action="gpio.php">
           GPIO #22 <input type="submit" id="encender22" name="encender22" value="Encender">
                 <input type="submit" id="apagar22" name="apagar22" value="Apagar">
           <br></br>
           
           <form method="post" action="gpio.php">
           <br></br>
           Programar #17 HI <input type="text" id="horaini" name="horaini" value="" size="2">
           MI <input type="text" id="minini" name="minini" value="" size="2">
           HF <input type="text" id="horafin" name="horafin" value="" size="2">
           MF <input type="text" id="minifin" name="minifin" value="" size="2">
              <input type="submit" id="progf1" name="progf1" value="Apply">
          
          <form method="post" action="gpio.php">
          <br></br>
          Programar #27 HI <input type="text" id="horaini2" name="horaini2" value="" size="2">
          MI <input type="text" id="minini2" name="minini2" value="" size="2">
          HF <input type="text" id="horafin2" name="horafin2" value="" size="2">
          MF <input type="text" id="minifin2" name="minifin2" value="" size="2">
             <input type="submit" id="progf2" name="progf2" value="Apply">

          <form method="post" action="gpio.php">
          <br></br>
          Programar #22 HI <input type="text" id="horaini3" name="horaini3" value="" size="2">
          MI <input type="text" id="minini3" name="minini3" value="" size="2">
          HF <input type="text" id="horafin3" name="horafin3" value="" size="2">
          MF <input type="text" id="minifin3" name="minifin3" value="" size="2">
             <input type="submit" id="progf3" name="progf3" value="Apply">
          
             <br>
             <br>

      </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>




          
          
