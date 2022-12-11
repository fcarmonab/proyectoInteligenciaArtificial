#!/bin/bash
echo 24 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio24/direction
echo 0 > /sys/class/gpio/gpio24/value

