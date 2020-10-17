minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB;
minikube addons enable metallb;
minikube addons enable dashboard;
kubectl apply -f srcs/yaml/metallb.yaml;
eval $(minikube docker-env);
docker build -t nginx:latest srcs/nginx/;
kubectl create -f srcs/yaml/nginx.yaml;
minikube dashboard;