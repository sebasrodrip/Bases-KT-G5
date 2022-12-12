<?php
  session_start();

  if(!isset($_SESSION["login"])){
    $message = "No autorizado";
    echo "<script type='text/javascript'>alert('$message');document.location='index.php'</script>";
    exit();
  }
  include "header.php";
  ?>
<body class="ubicacionIMG">
    <h1
        style="text-align:center; padding-top: 15px; padding-bottom: 10px; font-family: sans-serif; font-size: 42px; font-style: italic;">
        Estamos Ubicados en:</h1>
    <h2
        style="text-align:center; padding-top: 5px; padding-bottom: 40px; font-family: sans-serif; font-size: 28px; font-style: italic; ">
        100 mts Oeste del Servicentro ALYMO Grecia, Alajuela</h2>

    <div class="ubicacion">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.23737226415!2d-84.31133120670215!3d10.072793254202905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0585463ee0c45%3A0x4e2dbf9cb1e5821d!2sCiclo%20Cuco!5e0!3m2!1ses-419!2scr!4v1668333115205!5m2!1ses-419!2scr"
            width="1200" height="750" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>

<br><br><br><br><br><br>

<?php
include "footer.php";
?>

</html>