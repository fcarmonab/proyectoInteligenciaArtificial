#!/bin/bash
echo 27 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio27/direction
echo 1 > /sys/class/gpio/gpio27/value
echo 1 > /home/pi/light2.txt

sudo echo "Apagado GPIO #27" | mail -s "Alerta RaspberryPI" flavio.carmona.bueso@hotmail.com
