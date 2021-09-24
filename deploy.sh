#!/bin/bash

set -e

IMAGE_NAME="pixelyoutool"
IMAGE_VERSION="1.0.0"
SHELL=/bin/bash

eval "$(docker-machine env MAKER)"

echo "Building image ${IMAGE_NAME}:${IMAGE_VERSION}"
docker build . -t ${IMAGE_NAME}:${IMAGE_VERSION}

echo "Stopping container..."

docker stop ${IMAGE_NAME} || true
docker rm ${IMAGE_NAME} || true

docker run --restart=unless-stopped -d -p 127.0.0.1:17500:80 --name ${IMAGE_NAME} ${IMAGE_NAME}:${IMAGE_VERSION}
