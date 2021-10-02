docker-compose exec mariadb bin/bash -c "mysql -ubn_wordpress bitnami_wordpress < /etc/mysql/dumps/$1"
