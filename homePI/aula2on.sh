#!/bin/bash
echo 27 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio27/direction
echo 0 > /sys/class/gpio/gpio27/value
echo 0 > /home/pi/light2.txt

sudo echo "Encendido GPIO #27" | mail -s "Alerta RaspberryPI" flavio.carmona.bueso@hotmail.com
