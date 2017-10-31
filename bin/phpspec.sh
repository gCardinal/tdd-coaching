#!/usr/bin/env bash

CWD=$(dirname $(perl -MCwd -e 'print Cwd::abs_path shift' ${0}))
. ${CWD}/.helpers/init.sh

__docker_compose run --rm php php //app/vendor/phpspec/phpspec/bin/phpspec $*
#__docker_compose run --rm php ls -la