<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form id="myForm"   action="">
        <input type="text" name="username">
        <input type="text" name="lastname">
        <input type="button" onclick="myFunction()" value="Submit form">
    </form>
    <script>
      function  myFunction()
        {
            document.getElementById('myForm').submit();
        }
        </script>
</body>
</html>