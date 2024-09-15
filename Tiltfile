# -*- mode: Python -*-
os.environ['DOCKER_DEFAULT_PLATFORM'] = 'linux/amd64'
#docker_compose("compose.yaml")

### Runs test automatically when file changes
local_resource('Test','php bin/phpunit', allow_parallel=True, deps=['./src','./tests'])
