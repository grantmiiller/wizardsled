#!/bin/bash
MT_VOL="-v $PWD/app:/usr/src/myapp/app"
#MT_VOL=''
docker run $MT_VOL -p 8080:80 -it --rm --name sledapp wizardsled
