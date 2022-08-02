# InTpl

Simple PHP templates supporting **Template Inheritance**.

**see also:**

* [ModelView](https://github.com/foo123/modelview.js) a simple, fast, powerful and flexible MVVM framework for JavaScript
* [tico](https://github.com/foo123/tico) a tiny, super-simple MVC framework for PHP
* [LoginManager](https://github.com/foo123/LoginManager) a simple, barebones agnostic login manager for PHP, JavaScript, Python
* [SimpleCaptcha](https://github.com/foo123/simple-captcha) a simple, image-based, mathematical captcha with increasing levels of difficulty for PHP, JavaScript, Python
* [Dromeo](https://github.com/foo123/Dromeo) a flexible, and powerful agnostic router for PHP, JavaScript, Python
* [PublishSubscribe](https://github.com/foo123/PublishSubscribe) a simple and flexible publish-subscribe pattern implementation for PHP, JavaScript, Python
* [Importer](https://github.com/foo123/Importer) simple class &amp; dependency manager and loader for PHP, JavaScript, Python
* [Contemplate](https://github.com/foo123/Contemplate) a fast and versatile isomorphic template engine for PHP, JavaScript, Python
* [HtmlWidget](https://github.com/foo123/HtmlWidget) html widgets, made as simple as possible, both client and server, both desktop and mobile, can be used as (template) plugins and/or standalone for PHP, JavaScript, Python (can be used as [plugins for Contemplate](https://github.com/foo123/Contemplate/blob/master/src/js/plugins/plugins.txt))
* [Paginator](https://github.com/foo123/Paginator)  simple and flexible pagination controls generator for PHP, JavaScript, Python
* [Formal](https://github.com/foo123/Formal) a simple and versatile (Form) Data validation framework based on Rules for PHP, JavaScript, Python
* [Dialect](https://github.com/foo123/Dialect) a cross-vendor &amp; cross-platform SQL Query Builder, based on [GrammarTemplate](https://github.com/foo123/GrammarTemplate), for PHP, JavaScript, Python
* [DialectORM](https://github.com/foo123/DialectORM) an Object-Relational-Mapper (ORM) and Object-Document-Mapper (ODM), based on [Dialect](https://github.com/foo123/Dialect), for PHP, JavaScript, Python
* [Unicache](https://github.com/foo123/Unicache) a simple and flexible agnostic caching framework, supporting various platforms, for PHP, JavaScript, Python
* [Xpresion](https://github.com/foo123/Xpresion) a simple and flexible eXpression parser engine (with custom functions and variables support), based on [GrammarTemplate](https://github.com/foo123/GrammarTemplate), for PHP, JavaScript, Python
* [Regex Analyzer/Composer](https://github.com/foo123/RegexAnalyzer) Regular Expression Analyzer and Composer for PHP, JavaScript, Python


Example:

`{VIEWS}/layout/base.tpl.php`:

```php
<!DOCTYPE html>
<html><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php $this->start('title'); ?>No Title<?php $this->end('title'); ?></title>

</head><body>
<?php $this->start('content'); ?>
No Content
<?php $this->end('content'); ?>
</body></html>
```

`{VIEWS}/index.tpl.php`:

```php
<?php $this->extend('layout/base.tpl.php'); ?>

<?php $this->start('title'); ?>Index<?php $this->end('title'); ?>

<?php $this->start('content'); ?>
<p>Index page</p>
<?php $this->end('content'); ?>
```

driver code:

```php
<?php

define('VIEWS', dirname(__FILE__));

include(VIEWS . '/InTpl.php');

echo InTpl::Tpl('index.tpl.php', [VIEWS])->render([/*..*/]);
```

output:

```html
<!DOCTYPE html>
<html><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Index</title>

</head><body>
<p>Index page</p>
</body></html>
```
