<?php include("login.php");?>
<?php require("css/index.css");?>

<!DOCTYPE>
<html>
<head>
</head>

<body class="bg"> 
    <header>
        <title>BOOK RECORD MANAGEMENT SYSTEM</title>
        <h1>BOOK RECORD MANAGEMENT SYSTEM</h1>
        <p>SAN BARTOLOME | SAN FRANCISCO | BATASAN</p>
    </header>
    <main>   
        <div class="box">
            <form action="#" method="post">
                <br><img src="images/adminLogo1.png" class="img" alt="USER">
                <p class="error"><?php
                     if(isset($error)) {echo $error;} ?>
                <p>
                <div class="login">
                <input type="text" name="username" placeholder="Enter Username" class="txtbox" autofocus required>
                <br>
                <input type="password" name="password" placeholder="Enter Password" class="txtbox" autofocus required>
                <br><br>
                <input type="submit" name="login" value="Login" class="submit">
                </div>
            </form>
        </div>
    </main>
	<footer>  
            <b>Copyright &copy; 2021 QCU | SBIT-3F</b>    
    </footer>
</body>

</html>