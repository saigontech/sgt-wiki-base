# wp-theme-example
Knowledge Base Wordpress Theme

# How to run (local)
1. run `up_server.sh`
2. follow the setup page
3. confirm at: https://localhost. and https://localhost/wp-login.php with default login credentials: **user/bitnami**

# Migrate db
1. run `db_export.sh` to export current db to SQL file and save to `app/sql`
2. run `db_import.sh <dump_file_name.sql>` to import SQL file to db (e.g `db_import.sh db_1594881841.sql`)

