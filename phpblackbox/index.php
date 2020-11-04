<?php
  if(isset($_GET['username'])){
    echo "Hello ". $_GET['username'];
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="GET">
        <input type="text" name="username">
        <button type="submit">Click Me !!!</button>
    </form>
  </body>
</html>
