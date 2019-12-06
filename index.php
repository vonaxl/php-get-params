<!-- GOAL: Stampare una stringa verde se la
variabile password passata in GET è
uguale a "Boolean", altrimenti stampare
una stringa rossa.
REPO: php-get-params -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <?php 
    $password = $_GET['password'];
    ?>
<body>
    <h1>
    <?php 
        if ($password==='Boolean') {
            echo 'Password giusto'.'<br>';
            echo '<img src="https://media.giphy.com/media/111ebonMs90YLu/200.gif" alt="">';
            echo '<style type="text/css"> 
                h1{
                    color: green;
                }
            </style>
            ';
        }else {
            echo 'Password sbagliatisssssiimiiiiisssiiimoo';

            echo '<style type="text/css"> 
                h1{
                    color: red;
                }
            </style>
            ';
        }
    ?>
    </h1>
</body>
</html>