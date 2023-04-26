<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Registro |TO DO LIST</title>
</head>
<body>
    <form action="signup-check.php" method="post" >
        <h2>Registro</h2>

        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?> </p>
            <?php } ?>

        <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success'];?> </p>
            <?php } ?>


            <label>User Name</label>
            
            <input type="text" 
                    name="uname" 
                    placeholder="User name" 
                    ><br>


            <label>Name</label>
            <input type="text" 
                    name="name" 
                    placeholder="Name" 
                    ><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Confirme Password</label>
        <input type="password" name="re_password" placeholder="re_Password"><br>

        <button type="submit">Login</button>
        <a href="index.php" class="ca">Ya tiene una cuenta?</a>
    </form>
</body>
</html>