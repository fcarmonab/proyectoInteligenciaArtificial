#!/bin/bash
echo 17 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio17/direction
echo 1 > /sys/class/gpio/gpio17/value
echo 1 > /home/pi/light1.txt

sudo echo "Apagado GPIO #17" | mail -s "Alerta RaspberryPI" flavio.carmona.bueso@hotmail.com
