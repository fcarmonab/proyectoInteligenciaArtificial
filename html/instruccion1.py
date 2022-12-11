#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import time

os.system("clear")
GPIO.setmode(GPIO.BCM)

GPIO.setup(17,GPIO.IN)
GPIO.output(17,GPIO.HIGH) 
