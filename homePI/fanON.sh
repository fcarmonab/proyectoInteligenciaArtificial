#!/bin/bash
echo 9 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio9/direction
echo 0 > /sys/class/gpio/gpio9/value
echo 0 > /home/pi/fan.txt
