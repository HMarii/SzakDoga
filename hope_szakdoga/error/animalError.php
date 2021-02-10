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
    <h3>Ilyen állat már létezik az otthonban!</h3>
    </div>
</body>

<?php
    header('Refresh: 7; URL=index.php');
?>