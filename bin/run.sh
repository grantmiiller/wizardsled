#!/bin/bash
docker run -v $PWD/app:/usr/src/myapp/app -p 9001:9001 -it --rm --name sledapp wizardsled
