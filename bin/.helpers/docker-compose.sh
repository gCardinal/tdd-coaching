#!/usr/bin/env bash

__docker_compose() {
    docker-compose -f ${DOCKER_CWD}/docker-compose.yml -p tdd-coaching "${@}"
}
