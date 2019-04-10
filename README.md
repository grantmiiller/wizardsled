# Just a simple MageCart demo.

WARNING: THIS IS PURPOSEFULLY VULNERABLE, DO NOT USE IN A PRODUCTION ENVIRONMENT

Exploit instructions in [Exploit.md](https://github.com/grantmiiller/wizardsled/blob/master/Exploit_Steps.md)

## To get app running
1. Have docker installed
2. `cd` into the root directory of the repository
3. run `./bin/build.sh`
4. run `./bin/run.sh`

Useful shell scripts:
`./bin/build.sh` - Builds the docker image
`./bin/run.sh` - Runs a new instance of the Wizard Sled image
`./bin/ds.sh` - Gets a bash shell on the running instance
`./bin/printIP.sh` - Prints the IP address of the running instance
