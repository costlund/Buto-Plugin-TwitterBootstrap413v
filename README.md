# Buto-Plugin-TwitterBootstrap413v
Bootstrap 4


Inlude in head.

```
type: widget
data:
  plugin: twitter/bootstrap413v
  method: include
  data:
    meta: true
    css: true
    jquery: true
    popper: true
    js: true
```


## Version check

Check if Bootstrap 4 is in usage.

### Javascript

Check in Javascript if Bootstrap 4 is loaded.

```
if(document.getElementById('PluginTwitterBootstrap413v')){
  console.log('Bootstrap 4 is loaded!');
}
```

### PHP

Check in PHP if Bootstrap 4 is included.

```
if(
  isset($_SESSION['plugin']['twitter']['bootstrap413v']['include']) && 
  $_SESSION['plugin']['twitter']['bootstrap413v']['include']
  )
{
  echo('Bootstrap 4 is loaded!');
}
```
```
$user = wfUser::getSession();
if($user->get('plugin/twitter/bootstrap413v/include')){
  echo('Bootstrap 4 is loaded!');
}
```

###Element check.

```
type: div
settings:
  disabled: globals:_SESSION/plugin/twitter/bootstrap413v/include
innerHTML: 
```

### Webmaster
Classes for webmaster purpose are always added in a single style element.
```
.webmaster{}.webmaster-border{border:solid 1px red}.webmaster-text{color:red}
```
