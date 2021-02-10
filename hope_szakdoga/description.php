<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'root');
$db = "shelter";
mysqli_select_db($con, $db);

$prevurl = $_SERVER['REQUEST_URI'];
// URL utolsó része, az állat ID kinyerése
$pos = strrpos($prevurl, '/', 0);
$animalid = substr($prevurl, $pos+1);

if(isset($animalid)) {
    $s = "SELECT description,name,type,weight,age,img FROM animals WHERE id= '$animalid'";
    $result = mysqli_query($con, $s);
    while($row = mysqli_fetch_array($result)) {
        $desc = $row['description'];
        $name = $row['name'];
        $type = $row['type'];
        $weight = $row['weight'];
        $age = $row['age'];
        $img = $row['img'];
    }
    echo "
    <head>
        <link rel='stylesheet' type='text/css' href='./css/style.css'>
        <style>
            .infocontent img{
                padding: 5px;
                width: 33%;
                height: 50%;
                margin: auto;
                text-align: center;
            }

            .infocontent {
                
                padding: 5px;
                margin: auto;
                text-align: center;
                font-size: 16px;
                text-transform: uppercase;
                color: black;
            }

            .text {
                font-weight: bold;
                font-size: 18px;
            }



            #header {
                text-align: center;
                text-transform: uppercase;
                text-shadow: 3px 4px 7px rgba(81,67,21,0.8);
	            font-family: 'Kaushan Script', cursive;
            }

            
        </style>
    </head>
    
    <body>
        <div class='info'>
            <h1 id='header'>$name adatai</h1>
            <hr>
            <div class = 'infocontent'>
                <a href='../img/$img' target='_blank'><img src ='../img/$img'></a>
                <hr>
                <div class = 'text'>
                <h3>Típus : $type</h3>
                <h3>Súly : $weight kg</h3>
                <h3>Kor : $age éves</h3>
                <h3>Leírás : $desc</h3>
                </div>
            </div>
        </div>
    </body>";
} else {
    echo "Ilyen állat nem létezik!";
}

?>