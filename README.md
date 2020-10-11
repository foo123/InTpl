# InTpl

Simple PHP templates supporting **Template Inheritance**.

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
