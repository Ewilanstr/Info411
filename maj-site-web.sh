#!/bin/bash
git pull https://github.com/Ewilanstr/Info411.git
docker compose down
docker-compose up -d
