<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>UPDATE DATA</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button>Sign up</button> 
    </form>

    <h3>DELETE DATA</h3>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</form>

</body>

</html>