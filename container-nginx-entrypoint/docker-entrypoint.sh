#!/bin/bash
set -e

# Keep Container Running
while true; do
  sleep 60  # Adjust the sleep interval as needed
done

# Start Services
service nginx start

# Start the main process
exec "$@"
