#!/bin/bash
sudo pkill -f sensor1.py
sudo pkill -f python
/./home/pi/aula5off.sh
/./home/pi/aula6on.sh
echo 1 > /home/pi/alarma.txt
