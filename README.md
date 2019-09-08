### Quick demo

`docker build webapp -t webapp`

`docker build webdb -t webdb`

(This can be reran to deploy the new image)
`docker stack deploy -c docker-compose.yml stackdemo`

After waiting a while visit: `http://localhost` and you should be greeted with a list of names from the DB

`docker stack rm stackdemo`

Just some extras that I will use:
```
 docker run -d -p 5000:5000 --restart=always --name registry registry:2
 docker build webapp -t webapp
 docker tag webapp:latest localhost:5000/webapp
 docker push localhost:5000/webapp
image: localhost:5000/webapp:latest
```