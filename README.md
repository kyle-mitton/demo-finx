# demo-finx

Follow this link to deploy the project

https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04

## 1. Follow the step 1.

Step 1 — Installing Apache and Updating the Firewall

## 2. After that, follow the step 3.

Step 3 — Installing PHP

## 3. Go to /var/www and clone the project.

## 4. Rename the project to demo.finx.ca

## 5. Follow the step 4.

Step 4 — Setting Up a Virtual Host

> sudo chown -R $USER:$USER /var/www/demo.finx.ca

> sudo chmod -R 755 /var/www/demo.finx.ca

Here we don't need to add index.html.

Skip that and edit `/etc/apache2/sites-available/demo.finx.ca.conf`.

> sudo nano /etc/apache2/sites-available/demo.finx.ca.conf

        <VirtualHost *:80>
          ServerAdmin webmaster@localhost
          ServerName demo.finx.ca
          ServerAlias www.demo.finx.ca
          DocumentRoot /var/www/demo.finx.ca
          ErrorLog ${APACHE_LOG_DIR}/error.log
          CustomLog ${APACHE_LOG_DIR}/access.log combined
        </VirtualHost>

## 6. Connect demo.finx.ca to your instance ip

That's all! :)
