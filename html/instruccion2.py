#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import time

os.system("clear")
GPIO.setmode(GPIO.BCM)

GPIO.setup(27,GPIO.IN)
GPIO.output(27,GPIO.HIGH)

