<a name="index_block"></a>

=================
<a name="block1"></a>
## 1. Installation [↑](#index_block)
### when declaring a class, we immediately pass the error page

```php
<?php
    include '../src/Router.php';
    $route = new Router('templates/404.php');
```
<a name="block2"></a>
## 2. Setting the route [↑](#index_block)

<a name="block2.1"></a>
### 2.1. Adding routes and pages to display [↑](#index_block)

```php
<?php
    $route->Add('', 'templates/home.php');
    $route->Add('posts', 'templates/posts.php');
```

<a name="block2.2"></a>
### 2.2. You can also transfer additional data via url [↑](#index_block)

```php
<?php
    $route->Add('post/{id:\d+}', 'templates/post.php');
```
#### Usage:
```HTML
<a href='/post/1'> POST 1 </a>
```
#### Usage:
#### id will be in the array route
```php
<?php
$this->route['id']
```
### 3. The finished application will look like this:
```php
<?php 
    include '../src/Router.php';
    $route = new Router('templates/404.php');
    $route->Add('', 'templates/home.php');
    $route->Add('posts', 'templates/posts.php');
    $route->Add('post/{id:\d+}', 'templates/post.php');
    $route->run();
```