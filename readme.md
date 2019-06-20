### Readme to setup project

1. setup your `/etc/hosts` file by adding local domain
```bash
127.0.1.1	semalt.loc
```

2. configure your apache `conf` file for current local domain at `\apache\conf\extra\httpd-vhosts.conf`
```bash
<VirtualHost *:80>
    DocumentRoot "G:/XAMPP/htdocs/sites/semalt.loc/public"
    ServerName semalt.loc
    ServerAlias semalt.loc
 
    ErrorLog "logs/localhost.log"
    CustomLog "logs/localhost.log" common
</VirtualHost>
```

3. create `.env` file in root path of project, with your local configs

4. `create` new database if not exist:
```bash
mysql -u root -p
CREATE DATABASE semalt
```

5. migrate and seed data to database:
```bash
php artisan migrate --seed
```
