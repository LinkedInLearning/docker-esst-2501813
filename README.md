# Docker Essential Training

Dies ist das Repository für den **LinkedIn Learning** Kurs `[COURSENAME]`. Den gesamten Kurs finden Sie auf [LinkedIn Learning][lil-course-url].

![COURSENAME][lil-thumbnail-url] 

## Nutzung der Übungsdateien
Um die Übungsdateien für diesen Kurs nutzen zu können, haben Sie drei Möglichkeiten:
1. _(einfach)_ Klicken Sie auf den grünen Button "Code" und dann auf "Download ZIP"
2. _(mittel)_ klonen Sie dieses Repo mit ```
git clone https://github.com/LinkedInLearning/docker-esst-2501813.git```
3. _(fortgeschritten)_ forken Sie das Repo und klonen es dann (z.B. mit ssh)


## Hello world
```bash
docker run hello-world
docker ps -a
```

## Web-Applikation
```bash
docker run -d -p 8080:80 -v ${PWD}:/var/www/html php:8-apache
docker ps
docker stop <CONTAINER_ID>
```
## Eigenes Image
```bash
docker build -t my-app .
docker run -d -p 8080:80 -v ${PWD}:/var/www/html my-app
```

## Mehrere Container
```bash
cd advanced
docker-compose up
```

## Einloggen in Contaier
```bash
docker exec -it advanced_web_1 bash
```