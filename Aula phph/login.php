<?php
    include("header.php");
?>

    <div class="login">
        <h3>Login</h3>
        <form action="processa.php" method="POST">
            <span>Usuário:</span>    
            <input type="text" name="usuario">
            <span>Senha:</span>    
            <input type="password" name="senha">
            <input type="submit" value="Entrar"/>
        </form>
    </div>

    <?php if(isset($_GET['msg'])){
    echo"
        <div style='margin 0 auto; text-alig: center'>
        <span style='color: red;'>Usuario ou Senha invalido</span>
    </div>
    ";
    }
    ?>

<?php 
    include("footer.php")
?>

</body>
</html>
