<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hype Energy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">

            <h1>Welcome to HYPE ENERGY distributor hub</h1>
            
        <div class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eveniet soluta facilis sit doloribus eius eligendi, praesentium quis aperiam sed at, sint dolores qui porro veniam libero quibusdam atque vitae id. Perspiciatis sequi quos ratione animi praesentium nisi reiciendis corrupti odit tenetur maiores, quas fugiat repellendus id dolore, voluptate incidunt.</div>

        <form action="login.php" method="post">
            
            <h2>LOGIN</h2>
            
            <?php if (isset($_GET['error'])) { ?>
                
                <p class="error">
                    <?php echo $_GET['error']; ?>
            </p>
            
            <?php } ?>
            
            <label>User Name</label>
            
            <input type="text" name="uname" placeholder="User Name"><br>
            
            <label>Password</label>
        
            <input type="password" name="password" placeholder="Password"><br>
            
            <button type="submit">Login</button>
            
        </form>
    </div>
</body>
</html>