#!/bin/bash

cd ./config

config_list=(db-local.php params-local.php web-local.php)

for file in ${config_list[@]}; do
  if [ -f $file ]; then
    echo "$file exists."
  else
    cp $(echo 'db-local.php' | grep -oP '(.*)(?=-local)' | sed 's/$/.php /') $file
    echo "$file is created success"
  fi
done
