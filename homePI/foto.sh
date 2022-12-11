#!/bin/bash
fswebcam -d /dev/video0 -r 300x300 -S 30 -F 5 intruso1.jpg
sleep 1
fswebcam -d /dev/video0 -r 300x300 -S 30 -F 5 intruso2.jpg
sleep 1
fswebcam -d /dev/video0 -r 300x300 -S 30 -F 5 intruso3.jpg

