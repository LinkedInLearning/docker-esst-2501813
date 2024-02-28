# Docker lernen

Dies ist das Repository für den **LinkedIn Learning** Kurs `Docker lernen`. Den gesamten Kurs finden Sie auf [LinkedIn Learning][lil-course-url].

![COURSENAME][lil-thumbnail-url] 

Dass Anwendungen auf einem Rechner funktionieren, auf anderen aber nicht, ist ein häufiges Problem in der Softwareentwicklung. Konfigurationsmanagement-Tools und virtuelle Maschinen sind gängige Lösungen, können aber umständlich und komplizierter sein als nötig.

Docker ist eine Open-Source-Software, genauer gesagt "Containervirtualisierungsplattform“, und gilt als wichtiger Bestandteil der modernen Webentwicklung.  Docker vereinfacht die Bereitstellung und Verwaltung Ihrer Anwendungen, indem sie diese in Images verpackt, die in Containern ausgeführt werden.

Der erfahrene Webentwickler Thomas Rose zeigt Ihnen in diesem LinkedIn Learning-Kurs alles, was Sie über die Nutzung von Docker wissen müssen: Sie lernen, was Images von Containern unterscheidet, wie Sie eigene Images erstellen und wie Sie mit Docker-Compose mehrere Container gleichzeitig hochfahren.


## Anleitung
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


### Autor

**Thomas Rose**

_Medienpädagoge_

Sehen Sie sich andere Kurse des Autors auf [LinkedIn Learning](https://www.linkedin.com/learning/instructors/thomas-rose) an.

[0]: # (Replace these placeholder URLs with actual course URLs)
[lil-course-url]: https://www.linkedin.com/learning/docker-lernen
[lil-thumbnail-url]: https://media.licdn.com/dms/image/D560DAQFM1KOo53f5uA/learning-public-crop_675_1200/0/1708684749643?e=2147483647&v=beta&t=4SFcBf-69sKQ1hCrTrJ8FpW455I5FZtHcfG5H9Yr2o4
