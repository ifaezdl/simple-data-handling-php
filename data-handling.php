<?php
echo 'hi';
if ($_SERVER ['REQUEST_METHOD'] === 'POST'){

    $name=isset($_POST['name']) ? $_POST['name'] : null;
    $weight=isset($_POST['weight']) ?$_POST['weight'] : null;
    $height=isset($_POST['height'])? $_POST['height'] : null;
    $birthday=isset($_POST['birthday']) ? $_POST['birthday'] : null;
    $time=isset($_POST['time'])? $_POST['time'] : null;
    
    $data=[

        'name'=>$name,
        'weight'=>$weight,
        'height'=>$height,
        'birthday'=>$birthday,
        'time'=>$time
    ];

    var_dump($data);

    $jsonFile='jsonFile.json';
    $jsonData=[];
    if (file_exists($jsonFile)){

        $jsonData=json_decode(file_get_contents($jsonFile),true);

    }
    $jsonData[]=$data;
    file_put_contents($jsonFile,json_encode($jsonData,JSON_PRETTY_PRINT));
    header('Location: display.php');
    exit();
}

?>