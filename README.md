# Lokale WordPress-Entwicklungsumgebung mit wp-env

Dies ist das Repository für den **LinkedIn Learning** Kurs `[COURSENAME]`. Den gesamten Kurs finden Sie auf [LinkedIn Learning][lil-course-url].

![COURSENAME][lil-thumbnail-url] 

## Installation
Um die Übungsdateien für diesen Kurs nutzen zu können, haben Sie drei Möglichkeiten:
1. _(einfach)_ Klicken Sie auf den grünen Button "Code" und dann auf "Download ZIP"
2. _(mittel)_ klonen Sie dieses Repo mit ```
git clone https://github.com/LinkedInLearning/docker-esst-2501813.git```
3. _(fortgeschritten)_ forken Sie das Repo und klonen es dann (z.B. mit ssh)

Nachdem Sie die Dateien lokal vorliegen haben, wechseln Sie in der Kommandozeile in das Verzeichnis, und installieren Sie die Abhängigkeiten mit 
```
npm install
```

## Nutzung
Um Ihre lokale Entwicklungsumgebung zu starten, tippen Sie
```
npm run up
```
Beim ersten Mal dauert der Prozess einige Minuten, ab dem zweiten Mal geht es deutlich schneller.
Sobald wp-env vollständig gestartet, können Sie mit Ihrem Browser auf http://localhost:8888 zugreifen.
