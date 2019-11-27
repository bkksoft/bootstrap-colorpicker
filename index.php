<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Colorpicker</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  
</head>
<body>

<form action="">
  <input type="text" id="color" name="color" autocomplete="off" class="color-input">
  <input type="text" id="color" name="color" autocomplete="off" class="color-input">
  </form>

  <script src="jquery.js"></script>


  <link href="bootstrap-colorpicker.min.css" />
  <script src="bootstrap-colorpicker.min.js"></script>

<script>

$(function () {
    var $color = $('.color-input');

    $color.colorpicker().colorpicker().on('changeColor', function(e) {

    });
});
</script>
</body>
</html>