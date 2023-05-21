#!/bin/bash
# ENCODING: UTF-8 

for i in `sudo netstat -antp |grep mariadbd|awk '{print $NF}'| cut -f1 -d "/"`; do sudo kill $i; done
echo 'Servicio finalizado con éxito'
#cd /home/g1233n4/Proyectos_PHP_Laravel/example-app sail up
#-v re="$filter/" '$0 ~ re {print $2}'



#sudo netstat -antp |grep mariadbd|awk '{print $NF}'
