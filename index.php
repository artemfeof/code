<?php
echo "Hello world!";
$username = "artemfeof";
echo $username;
$age = "24";
echo $age;
$isTrue = true;
echo $isTrue."<br>";
echo "My name is $username<br>";
$usernameArray = ["artemfof", "bla1"];
echo $usernameArray [1];
$usernameAsocArray = ["username" => "artemfeof", "age" => 24];
echo $usernameAsocArray  ["age"];
for ($i = 0; $i < 2; $i++){
    echo $usernameArray [$i];
};
foreach ($usernameAsocArray as $key => $item){
  echo $key." ".$item."<br>";
};