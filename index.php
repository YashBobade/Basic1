<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img class="img" src="mahi.jfif" alt="Thala">
        <h1>Welcome to the DMIETR trip ticket registration portal</h1>
        <p class="para">We announced the UK trip for our college student if you want to 
            join us please fill up the following information.
        </p>
    </div>

    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="text" name="age" placeholder="enter age"><br>
        <input type="text" name="gender" placeholder="enter gender"><br>
        <input type="email" name="email" placeholder="enter email"><br>
        <input type="text" name="phone" placeholder="enter phone"><br>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea><br>
        <button type="submit">submit</button>

    </form>
    <script src="index.js"></script>
</body>
</html>