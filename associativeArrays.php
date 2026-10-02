/*Find the most expensive product. Loop through the array and display the product 
with the highest price*/

<?php
$products =["keyboard" => 30, "mouse" =>15, "monitor" => 200, "headphones" =>50];"

$high=0;
$mostExpensive =";

foreach ($products as $name =>$price){
    if ($price > $high){
    $high = $price;
    $mostExpensive=$product;}
    }


echo "The most expensive is: ", $mostExpensive;
echo "Price: ", $high;


?>

/*Loop through the array and display: Anna - Age:20 - Grade0 (etc)*/
<?php

$students =[
    "Anna" =>[
        "age"=> 20,
        "grade" => 0
    ],
    "Luis" =>[
        "age"=>22,
        "grade"=> 6
    ],
    "Marta" =>[
        "age"=>19,
        "grade"=>9
    ],
];

foreach ($students as $name =>$info){ //recorro el array students con name e info
    echo $name;
    foreach($info as $age =>$grade){ //para poner la info, recorro el array info con data y value
        echo " - ",$age," - ",$grade;
    }
    echo"<br>";
}

?>

/*Create a multidimensional associative array. 
The program should have the following options:
1. display all products
2.display products on stock
3. calculate the total value of the inventory (price*stock)
4.find the product with the highest stock
5. add stock to a product
6.add product
7.remove product
8.exit

<?php

$inventory=[
    "keyboard"=> ["price"=>30,"stock"=>5],
    "mouse"=>["price"=>300,"stock=>50"],
    "RAM"=>["price"=>10,"stock"=>15],
    "HDD" => ["price"=>130,"stock"=>115],
    "AudioSystem"=> ["price"=>310, "stock"=>-1]

];
//recorro el array y muestro por pantalla
echo "<br>Inventory</br>";
foreach ($inventory as $item =>$info){
    echo $item;
    foreach($info as $price =>$stock){
        echo " - ",$price," - ",$stock;
    }
}
echo"<br>";
echo "<br>Products on stock </br>";

foreach ($inventory as $item =>$info){
    if($info["stock"]> 1){

        echo $item," - ", $stock;

    }
    }

?>