#! /bin/bash

if [[ $1 == 'up' ]]
then
    docker-compose up
elif [[ $1 == 'clean' ]]
then
    docker-compose down
    docker volume prune
    docker network prune
    docker rmi application-image:2HKT
    docker rmi mysql:8.0.31
elif [[ $1 == 'down' ]]
then
    docker-compose down
elif [[ $1 == 'start' ]]
then
    docker-compose start
elif [[ $1 == 'stop' ]]
then
    docker-compose stop
elif [[ $1 == 'ps' ]]
then
    docker-compose ps -a
else
    echo "Please enter either: up, clean, down, stop, ps"
fi
