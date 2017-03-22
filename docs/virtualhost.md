**creazione apache virtual host**

1.creare l'host

in /etc/apache2/sites-available creare un file .conf del tipo milanomarittima.xxx.conf 

 <VirtualHost *:80>

  	DocumentRoot /var/www/html/mimaThirdEye/public
  	ServerName www.milanomarittima.xxx
	ServerAlias milanomarittima.xxx


	<Directory />
        	Options Indexes FollowSymLinks
        	AllowOverride All
        	Require all granted
		Allow from all
	</Directory>


	# Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
	# error, crit, alert, emerg.
	# It is also possible to configure the loglevel for particular
	# modules, e.g.
	#LogLevel info ssl:warn

	ErrorLog ${APACHE_LOG_DIR}/error_laravel_milanomarittimaxxx.log
	CustomLog ${APACHE_LOG_DIR}/access_laravel_milanomarittimaxxx.log combined

	# For most configuration files from conf-available/, which are
	# enabled or disabled at a global level, it is possible to
	# include a line for only one particular virtual host. For example the
	# following line enables the CGI configuration for this host only
	# after it has been globally disabled with "a2disconf".
	#Include conf-available/serve-cgi-bin.conf
</VirtualHost>


attivo il VirtualHost
sudo a2ensite milanomarittima.xxx.conf

ristarto apache 
sudo service apache2 restart


2.creo un local host nell'hosts

sudo vi /etc/hosts

127.0.0.1	www.milanomarittima.xxx


Quando digito www.milanomarittima.xxx dalla mia macchina vado su 127.0.0.1 dove trovo un VirtualHost che ha quel nome !!