docker-compose exec mariadb sh -c "mysqldump -ubn_wordpress bitnami_wordpress > /etc/mysql/dumps/db_$(date +%s).sql"
