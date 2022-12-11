#!/bin/bash
# sudo sendemail -f facbdomotica@gmail.com -t "flavio.carmona.bueso@hotmail.com, flavio.carmona.bueso@gmail.com, fcarmona@tigo.com.hn, vanessaa.calderon15@gmail.com, gmilton1000@gmail.com" -s smtp.elasticemail.com:587 -u "Testing #2 envio a multiples correos" -m "Esto fue enviado desde una Raspberry PI 4" -v -xu facbdomotica@gmail.com -xp C9DA9BF14B53531AE5E528804CE1598820EE -o tls=yes
sudo fswebcam -d /dev/video0 -r 300x300 -s 30 -F 5 /var/www/html/sistemas.jpg
sleep 1
sudo echo "Imagen tomada desde Raspberry PI Grupo #1" | mail -s "Alerta RaspberryPI" flavio.carmona.bueso@hotmail.com -A /var/www/html/sistemas.jpg
