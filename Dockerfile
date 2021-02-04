FROM saurabhkothari/sandbox-web-server:v15

COPY index.php  var/www/html/index.php

EXPOSE 80
