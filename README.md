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


Check in Javascript if Bootstrap 4 is loaded.

```
if(document.getElementById('PluginTwitterBootstrap413v')){
  console.log('Bootstrap 4 is loaded!');
}
```


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

