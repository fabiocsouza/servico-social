<?php
if(isset($_POST['email']) && !empty($_POST['email'])) 
{
    if(isset($_POST['senha']) && !empty($_POST['senha'])) 
    {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo "meu email é: ".$email.  " e minha senha é: ".$senha;   
    }
}
?>
<hr/>
<form method="POST">
    E-mail<br/>
    <input type="text" name="email"/><br/><br/>
    
    Senha<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Enviar" />
</form>