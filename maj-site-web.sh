#!/bin/bash
sudo git pull https://github.com/Ewilanstr/Info411.git
sudo docker compose down
sudo docker compose up -d
