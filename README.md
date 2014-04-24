phileParserParsedown
====================

Use the [Parsedown](https://github.com/erusev/parsedown) parser in [Phile](https://github.com/PhileCMS/Phile).

### 1.1 Installation (composer)
```
php composer.phar require phile/parsedown:*
```

### 1.2 Installation (Download)

* Install the latest version of [Phile](https://github.com/PhileCMS/Phile)
* Clone or download this repo into `plugins/phile/parsedown`
* add `$config['plugins']['phile\\parsedown'] = array('active' => true);` to your `config.php`

Then add the Parsedown dependency to your composer.json file:

```json
{
  "require": {
    "erusev/parsedown": "*" // the parsedown parser
  }
}
```

Now run your `composer install` command as normal.

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins'] = array(
  'phile\\parserMarkdown' => array('active' => false), // disable the default parser
  'phile\\parsedown' => array('active' => true) // use parsedown
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
