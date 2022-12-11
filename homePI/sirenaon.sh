#!/bin/bash
echo 11 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio11/direction
echo 0 > /sys/class/gpio/gpio11/value
sleep 7
echo 11 > /sys/class/gpio/gpio11/value
