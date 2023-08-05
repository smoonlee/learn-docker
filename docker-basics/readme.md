# Docker Basics


### DockerFile
 Configuration file used to build a container image 

### Docker commands
```
docker build -t <imagename:version> -f pathto\Dockerfile . 
```

### Docker run 
```
docker run -it <imagename:version>
```

```
docker run -id <imagename:version>
```

### Docker Connect to Container
```
docker exec -it <conatiner-name>
``