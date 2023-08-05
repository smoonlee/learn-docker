#!/bin/bash
set -e

# Start container services
service nginx start

# Keep Container Running
while true; do
  sleep 60  # Adjust the sleep interval as needed
done
