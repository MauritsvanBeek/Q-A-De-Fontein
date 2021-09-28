<?php include ('server.php'); ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Maurits van Beek">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <h2>Q & A</h2>
        <form method="post" action="index.php">
            <div class="inputBox">
                    <input type="text" name="question" required="">
                <label>Vul je vraag in</label>
            </div>
            <input type="submit" name="" value="Submit">
        </form>
    </div>
</body>
</html>
