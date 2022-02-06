


<?php

/**conectar a una base de datos */
$coneccion= mysqli_connect("127.0.0.1","root","","tecnonologia");
$app=$_POST["app"];
$pass=$_POST["password"];
$cell=$_POST["cell"];



$insertar=mysqli_query($coneccion,"insert into cli(app,password,cell
)
values('".$app."','".$pass."','".$cell."')");

if($insertar==true)
{

    
    ?>
<script>
       window.location.href="http://localhost/F/SUCCESSFUL_REGISTRATION.php";
</script>
<?php

}
