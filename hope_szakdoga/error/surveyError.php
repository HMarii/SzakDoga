<head>
<title>Siker!</title>
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
    <h3>Az állatot nem sikerült örökbe fogadni!</h3>
    <h3>Sajnáljuk, de a személyiséged nem felel meg az adott kritériumoknak.</h3>
    </div>
</body>

<?php
    header('Refresh: 7; URL=index.php');
?>