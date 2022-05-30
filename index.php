<?php

require_once __DIR__ . '/Color.php';

$color = new Color (300, 200, 200);
$color2 = new Color(300,200,200);

$mixedColor = $color->mix(new Color (100,100,100));






var_dump($mixedColor);

$colorrand= Color::randomColor();
//var_dump($colorrand);




 function equals (Color $colorObject1, Color $colorObject2): bool{


    if($colorObject1->getRed() == $colorObject2->getRed() && $colorObject1->getBlue() == $colorObject2->getBlue() && $colorObject1->getGreen() == $colorObject2->getGreen()){

        return true;
    }

    else{

        return false;
    }


}





try{

    $test = new Color(400,300,200);
}

catch (Exception $e){

    die($e->getMessage());
}



















