<html>
<head>
<meta http-equiv="refresh" content="1" />
</head>
       <style type="text/css">
                              
                             .div1 {
                                   width: 30%;
                                   height: 70px;
                                   background-color:#1E90FF;
                                   margin: 0 auto;
                                   color: black;
                                   }

                              .div2 {
                                   width: 30%;
                                   height: 445px;
                                   background-color:#85C1E9;
                                   margin: 0 auto;
                                   color: red;
                                   }

                              .div3 {
                                    width: 66%;
                                    height: 70%;
                                    margin: 0 auto;
                                    }  
      </style>
<body>
      <div class="div1" align="center">
                        <table border="0px" align="center">
                               <tr>
                                   <td>
                                       <?php  
                                            echo '<img src="logo.png"\>';
                                       ?>
                                   </td>
                               </tr>
                        </table>
      </div>
      
      <div class="div2" align="center" style="color: green;">
                                   <table border="0px">
                                       <tr> 
                                           <td>
                                               <h2>Light 1</h2>
                                           </td>
                                           <td>   
                                               <?php
                                                    $pf=fopen("/home/pi/light1.txt","r");
                                                    $valor=fgets($pf);
                                                    if ($valor == 0) {
                                                                      echo '<img src="ON.png"\>';
                                                                     } 
                                                    if ($valor == 1) {
                                                                      echo '<img src="OFF.gif"\>';
                                                                     }
                                               ?>
                                           </td>
                                           
                                        </tr> 
                                        <tr>
                                            <td>
                                                <h2> Light 2 </h2>
                                            </td>
                                            <td>
                                                <?php
                                                    $pf2=fopen("/home/pi/light2.txt","r");
                                                    $valor2=fgets($pf2);
                                                    if ($valor2 == 0) {
                                                                      echo '<img src="ON.png"\>';
                                                                     } 
                                                    if ($valor2 == 1) {
                                                                      echo '<img src="OFF.gif"\>';
                                                                     }
                                               ?>
                                             </td>
                                        </tr>

                                        
                                         <tr>
                                             <td>
                                                 <h2> Light 3 </td>
                                             </td>

                                             <td>
                                                 <?php 
                                                      $pf3=fopen("/home/pi/light3.txt","r");
                                                      $valor3=fgets($pf3);
                                                      if ($valor3 == 0) {
                                                                         echo '<img src="ON.png"\>';
                                                                        }
                                                      if ($valor3 == 1) {
                                                                         echo '<img src="OFF.gif"\>';
                                                                        }
                                                ?>
                                            </td>

                                         </tr>
                                         
                                         <tr>
                                             <td>
                                                 <h2> Light 4 </h2>
                                             </td>

                                             <td>
                                                 <?php
                                                      $pfd=fopen("/home/pi/light4.txt","r");
                                                      $valor4=fgets($pfd);
                                                       if ($valor4 == 0) {
                                                                          echo '<img src="ON.png"\>';
                                                                         }
                                                       if ($valor4 == 1) {
                                                                         echo '<img src="OFF.gif"\>';
                                                                         }
                                                ?>

                                             </td>
                                        </tr>
                                        
                                         <tr>
                                             <td>
                                                 <h2>Alarm </h2>
                                             </td>

                                             <td>
                                                 <?php 
                                                      $pfa=fopen("/home/pi/alarma.txt","r");
                                                      $valor5=fgets($pfa);
                                                       if ($valor5 == 0) {
                                                                          echo '<img src="alarmaON.png"\>';
                                                                         }
                                                       if ($valor5 == 1) {
                                                                         echo '<img src="alarmaOFF.png"\>';
                                                                         }
                                                ?>
                                            </td>
                                          </tr>                                           
                              

                                             <td>
                                                 <h2> FAN </h2>
                                             </td>

                                             <td>
                                                 <?php 
                                                      $pff=fopen("/home/pi/fan.txt","r");
                                                      $valor6=fgets($pff);
                                                       if ($valor6 == 0) {
                                                                          echo '<img src="fanon.gif"\>';
                                                                         }
                                                       if ($valor6 == 1) {
                                                                         echo '<img src="fanoff.gif"\>';
                                                                         }
                                                ?>

                                             </td>
                                        </tr>


                                 </table>
      </div>
      <div class="div3" align="center">
                            <table border="0px" align="left">
                                   <tr>
                                       <td>
                                           <?php
                                                 echo '<img src="intruso1.jpg"\>'
                                           ?>
                                       </td>
                                       <td>
                                           <?php
                                                 echo '<img src="intruso2.jpg"\>'
                                           ?>
                                       </td>
                                       <td>
                                           <?php
                                                 echo '<img src="intruso3.jpg"\>'
                                           ?>
                                       </td>


                                   </tr> 
                           </table>
      </div>  
</body>
</html>
