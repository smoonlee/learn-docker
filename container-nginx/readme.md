# Docker Nginx Basics


### DockerFile
 Configuration file used to build a container image 

### Docker commands
```
docker build -t <imagename:version> -f pathto\Dockerfile . 
```

### Docker run and expose ports and Interact

Standard HTTP
```
docker run -p 80:80 -it <imagename:version>
```

Standard HTTP and HTPPS
```
docker run -p 80:80 -p 443:443 -it <imagename:version>
```

Headless Deployment
```
docker run -p 80:80 -p 443:443 -d <imagename:version>
```

Working Example
```
docker run -p 80:80 -p 443:443 -d nginx:0.8.5.1
```