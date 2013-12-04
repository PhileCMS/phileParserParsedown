phileParserParsedown
====================

Use the [Parsedown](https://github.com/erusev/parsedown) parser in [Phile](https://github.com/PhileCMS/Phile).

### Installation

* Install [Phile](https://github.com/PhileCMS/Phile)
* [Download this repo](https://github.com/PhileCMS/phileParserParsedown/archive/master.zip) and drop it into the _Phile root directory_

Then add the Parsedown dependency to your composer.json file:

```json
{
  "require": {
    "twig/twig": "1.14.*",
    "michelf/php-markdown": "1.3",
    "erusev/parsedown": "*" // the parsedown parser
  }
}
```

Now run your `composer install` command as normal.

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins'] = array(
  'phileParserMarkdown' => array('active' => false), // disable the default parser
  'phileParserParsedown' => array('active' => true) // use parsedown
);
```

### Why use this over Markdown?

* [Speed](http://parsedown.org/speed)
* [Consistency](http://parsedown.org/consistency)
* Github flavoured by default
* Tested in PHP 5.2, 5.3, 5.4 and 5.5
* Friendly to international input

### Why not use it?

* No table support
* Lack of settings and extensions
