minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB;
minikube addons enable metallb;
minikube addons enable dashboard;
kubectl apply -f srcs/yaml/metallb.yaml;
eval $(minikube docker-env);
docker build -t nginx:latest srcs/nginx/;
docker build -t mysql:latest srcs/mysql/;
docker build -t wordpress:latest srcs/wordpress/;
docker build -t phpmyadmin:latest srcs/phpmyadmin/;
docker build -t ftps srcs/ftps;
kubectl create -f srcs/yaml/
minikube dashboard;