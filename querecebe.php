<?php  include_once "config.php";?>
<html>
<body>
  <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    
    $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
    mysqli_select_db($conn,'$dbname');
    $sql = 
   "INSERT INTO `tbformulario` (`id`, `nome`, `email`, `cpf`) VALUES (NULL, '$nome', '$email', '$cpf')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('salvei seus dados !'); window.location = 'index2.html';</script>";
    }else {
        echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>