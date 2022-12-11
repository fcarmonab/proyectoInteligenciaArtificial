
#!usr/bin/env/ python
import RPi.GPIO as GPIO
import os
import time

os.system("clear")
GPIO.setmode(GPIO.BCM)

GPIO.setup(17,GPIO.OUT)
GPIO.output(17,GPIO.LOW)

