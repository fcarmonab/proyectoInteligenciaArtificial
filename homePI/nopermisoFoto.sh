#!/bin/bash
cd /etc/cron.d/
chmod -R 755 tomar_foto
cd /etc/init.d/
./cron restart
