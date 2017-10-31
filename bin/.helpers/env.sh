#!/usr/bin/env bash

PROJECT_NAME=${PROJECT_NAME:-tdd-coaching}
DOCKER_CWD=${DOCKER_CWD:-$(perl -MCwd -e 'print Cwd::abs_path shift' ${CWD}/../docker)}