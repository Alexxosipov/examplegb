#!/usr/bin/env bash

sudo -u backend CURRENT_UID=$(id -u) CURRENT_GID=$(id -g) docker-compose up --build -d
