# testapp
A test app using the Zend framework.

# Requirements:
* XAMPP 5.6.3


## Configurations:
Note: I have installed XAMPP on my Windows D: drive.

1.  Clone the repo into htdocs folder (D:\xampp\htdocs)
	- includes ZendFramework1.12.11 library
	- skeleton application 

2.  D:\xampp\apache\conf\extra\httpd-vhosts.conf
	- Setup the virtualhost as given below:
````
	<VirtualHost zendapplocal:80>
		DocumentRoot "D:/xampp/htdocs/zendapp/public"
		ServerName zendapplocal
		ErrorLog "logs/zendapp-error.log"
		CustomLog "logs/zendapp-access.log" combined
		SetEnv APPLICATION_ENV "development"
		<Directory D:/xampp/htdocs/zendapp/public>
				DirectoryIndex index.php
				AllowOverride All
				Order allow,deny
				Allow from all
		</Directory>
	</VirtualHost>
````
3.  C:\Windows\System32\drivers\etc\hosts
	- Map virtual host server name (zendapp.local) into local ip address
	- add the below line into hosts file
````
		127.0.0.1	zendapp.local
````
4.  Start the apache server by using XAMPP-control panel application (available inside the D:\xampp folder)

5.  Open your browser and run the testapp http://zendapp.local

## Folder Structures
1.  zendapp
	- application, where we can start write all our MVC logics
		- configs
		- controllers
		- layouts
		- models
		- views
		- Bootstrap.php
	- docs,
	- library - Zend core library
	- public - Where server will starts the app
		- index.php
		- .htaccess
		- css/js
 
	- tests

Please go through the link for more informations: http://framework.zend.com/manual/1.12/en/learning.quickstart.html