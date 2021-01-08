## Description
It a ready for use wordpress custom theme boilerplate with PSR-4 autoload composer functionality.
Please note we maximize simplify it keep main focus on a composer PSR-4 autoload intagration. If you need some more complex wp theme boilerplate then you can use something like [underscore bolerplate](https://underscores.me/) Also if you don't want use composer but still want autoload you can use [another bolerplate](https://github.com/WPTT/autoload) 

## Installation
1. Clone repository to your wordpress installation **wp-content/themes** folder
2. Go to cloned directory **cd wp-content/themes/wordpress_theme_with_autoload_boilerplate**
3. Execute composer command **composer dump-autoload** 

That all. Theme already populated with some dummy data just activate new theme through your admin panel and you receive some var_dump data that was retrieved through autoloaded classes.

## How to use
All autoloded classes we keep in **src** theme folder. You can change in composer.json file. Also in composer.json you can change default namespace. Right now we defined it as **ThemeDev**
