#!/bin/bash
cd /etc/cron.d/
chmod -R 755 enviar_email
cd /etc/init.d/
./cron restart
