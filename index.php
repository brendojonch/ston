<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <script src="//geoip-js.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
   


    <title>Maquininhas - Maquinas MS</title>


</head>

<body>
    <?
    include('inc/navbar.php');
    include('inc/message.php');
    include('inc/message-info.php');
    ?>
    <div class="container">
        <?
        include('inc/main-content.php');
        include('inc/form.php');
        include('inc/lightbox.php')
        ?>
    </div>
</body>

<?
include('inc/footer.php')
?>

</html>