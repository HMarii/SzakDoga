<head>
<title>Belépés</title>
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
    <h1>Sikertelen Belépés!</h1>   
    <h3>Ellenőrízd, hogy helyesen írtad-e be a bejelentkezési adataidat!</h3>
    </div>
</body>

<?php
    header('Refresh: 7; URL=index.php');
?>