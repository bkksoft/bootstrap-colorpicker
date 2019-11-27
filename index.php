<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Colorpicker</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">

  <script src="jquery.js"></script>
  <script src="main.js"></script>
</head>
<body>

<form action="">
  <input type="text" id="color" name="color" autocomplete="off" class="color-input">
  <input type="text" id="color" name="color" autocomplete="off" class="color-input">
  </form>

  

<script>

$(function () {
    var $color = $('.color-input');

    $color.colorpicker().colorpicker().on('changeColor', function(e) {

    });
});
</script>
</body>
</html>