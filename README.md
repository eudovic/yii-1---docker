# Yii 1.1 - DOCKER

There are some containers here to run Yii 1 (PHP and MYSL) on docker .
If you don't already have Docker , you can see how to install it here [docker installation](https://docs.docker.com/get-started/ "docker installation")

### Steps to enviroment
1. Clone this repository 
1. RUN docker-compose up (run by root project folder)

Only to your knowledge, the docker php port is 8082 and docker MSQL port is 8083. You can change these ports on docker-composer.yml


### Steps To Yii
Open localhost:8082 to see yii framework working
Open localhost:8082/requirements/index.php
##### IMPORTANT
If you want to run yii commands you should run these commands by protected folder.
Pay atention, all your yiic command should be runned on php docker instance. How could I Do?
1. On terminal type: docker exec -it yii_tests_v1 /bin/sh
2. cd protected
3. Now you can run your yiic commands

#### ABOUT YII 1.x
https://www.yiiframework.com/doc/guide/1.0/en
