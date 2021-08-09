#!/bin/bash

minikube start --vm-driver=virtualbox

minikube addons enable metallb
eval $(minikube docker-env)

docker pull metallb/speaker:v0.8.2
docker pull metallb/controller:v0.8.2

docker build -t nginx_image srcs/nginx
kubectl apply -f ./srcs/metallb.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml

docker build -t wordpress_image srcs/wordpress
kubectl apply -f ./srcs/wordpress/wordpress.yaml

docker build -t mysql_image srcs/mysql
kubectl apply -f ./srcs/mysql/mysql.yaml

docker build -t phpmyadmin_image srcs/phpmyadmin
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml

docker build -t influxdb_image srcs/influxdb
kubectl apply -f ./srcs/influxdb/influxdb.yaml

docker build -t grafana_image srcs/grafana
kubectl apply -f ./srcs/grafana/grafana.yaml

docker build -t ftps_image srcs/ftps
kubectl apply -f ./srcs/ftps/ftps.yaml

minikube dashboard