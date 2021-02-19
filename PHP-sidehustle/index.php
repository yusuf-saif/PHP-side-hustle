<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recharge Card Generator</title>
</head>
<body>
    <h1>Welcome to my Side hustle Recharge Card Generator</h1>
    
    <?php
        for ($i=0; $i <190 ; $i++) { 
            $card = rand(111111111111, 99999999999);
                echo $card. "<br>";
        }
        ?>
</body>
</html>