<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>PDO CRUDSRUD</title>
<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
<div class="top-gray"></div>
<div class="header">
<div class="big-logo">Blogspot</div>
<?php include 'menu.php';?>
</div>
<div class="content">
<div class="container">
<?php
if(!is_null(get('p'))){
switch (get('p')) {
case 'crud':
inc('crud');
break;
case 'blog':
switch (get('m')) {
case 'crud':
inc('tampilan/blog/all');
break;
case 'add':
inc('tampilan/blog/add');
break;
case 'edit':
inc('tampilan/blog/edit');
break;
default:
inc('tampilan/blog/all');
break;
}break;
default:
inc('crud');
break;
}
}else{ inc('crud'); } ?>
</div>
</div>
</body>
</html>