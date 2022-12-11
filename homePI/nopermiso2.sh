#!/bin/bash
cd /etc/cron.d/
chmod -R 755 aula2on
chmod -R 755 aula2off
cd /etc/init.d/
./cron restart
