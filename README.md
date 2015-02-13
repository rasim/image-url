# image-url
Intervention Image Extension URL Method for Laravel 4

[![Total Downloads](https://poser.pugx.org/rasim/image/downloads.svg)](https://packagist.org/packages/rasim/image) 


Installation
----

* In composer.json;

    ```json
    "rasim/image": "dev-master"
    ```
    
* In app.php

    ```php
	'Rasim\Image\ImageServiceProvider',
    ```

Usage
----

* Codes

    ```php
   Image::url("image_file.png","75","75");
    ```
