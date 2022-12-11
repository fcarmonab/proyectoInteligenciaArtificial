#!/bin/bash
echo 22 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio22/direction
echo 1 > /sys/class/gpio/gpio22/value
echo 1 > /home/pi/light3.txt

sudo echo "Apagado GPIO #22" | mail -s "Alerta RaspberryPI" flavio.carmona.bueso@hotmail.com
