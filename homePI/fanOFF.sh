#!/bin/bash
echo 9 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio9/direction
echo 1 > /sys/class/gpio/gpio9/value
echo 1 > /home/pi/fan.txt
