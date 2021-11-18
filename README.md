<a name="index_block"></a>
Just a router
=================
<a name="block1"></a>
## 1. Installation [↑](#index_block)

```php
<?php
    include '../src/Router.php';
    $route = new Router();
    $route->setPage404('404.html');
    $route->run();
```
<a name="block2"></a>
## 2. Setting the route [↑](#index_block)

<a name="block2.1"></a>
### 2.1. Displaying all data from a table [↑](#index_block)

#### Usage:
```php
<?php
    $route->Add('','index.php');
```
#### Output:
```

```