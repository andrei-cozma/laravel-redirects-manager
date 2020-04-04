# Redirects manager
It is a .htaccess generator for 301 redirects.  
Useful when you migrate site to another structure and you want to manage the redirects from old links to new ones.

## Installing
```bash
git clone https://github.com/andrei-cozma/laravel-redirects-manager.git redirects-manager
cd redirects-manager
composer install
touch database/database.sqlite
php artisan migrate
php artisan serve
```

## Use

Add old links manually or import them in a .csv file.  
Foreach link define the new one.  You can edit the redirection as many times as you need.  
Generate the .htaccess file. Copy it in root folder of your server.  

## Contributing
If you want to contribute to this project you can email me at [andrei@acoz.ro](mailto:andrei@acoz.ro)

## Screenshots
![redirects manager](http://fakecdn.acoz.ro/1586017933.png)  
&nbsp;
![redirects manager](http://fakecdn.acoz.ro/1586017946.png)
&nbsp;
![redirects manager](http://fakecdn.acoz.ro/1586017956.png)

