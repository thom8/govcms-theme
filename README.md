# Lagoon GovCMS project template

## Requirements

* [Docker](https://docs.docker.com/install/)
* [pygmy](https://docs.amazee.io/local_docker_development/pygmy.html#installation) (you might need sudo for this depending on your ruby configuration)
* [Ahoy](http://ahoy-cli.readthedocs.io/en/latest/#installation)


## Setup

1. Checkout project repo and confirm the path is in docker's file sharing config - https://docs.docker.com/docker-for-mac/#file-sharing

```
git clone https://gitlab.com/GovCMS/govcms-lagoon.git govcms-lagoon && cd $_
```

2. Make sure you don't have anything running on port 80 on the host machine (like a web server).

```
pygmy up
```

3. Build and start the containers

```
ahoy up
```

4. Install GovCMS.

```
ahoy install
```

5. Login

```
ahoy login
```

## Commands

Additional commands are listed in `.ahoy.yml`

## Support

#govcms channel in https://amazeeio.rocket.chat/
