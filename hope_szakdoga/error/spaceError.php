<head>
<title>Jajj ne!</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
    <style>
        body {
            background-color: red;
        }
        .alert {
            text-align:center;
            font-size: 32px;
            width: 50%;
            margin:auto;
        }
    </style>
</head>
<body>
        <div class="alert">
    <h1>Hiba!</h1>   
    <h3>Sajnáljuk, de jelenleg nincs szabad hely az otthonban.</h3>
    <h3>Próbáld újra később.</h3>
    </div>
</body>

<?php
    header('Refresh: 7; URL=index.php');
?>