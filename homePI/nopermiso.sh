#!/bin/bash
cd /etc/cron.d/
chmod -R 755 aula1on
chmod -R 755 aula1off
cd /etc/init.d/
./cron restart
