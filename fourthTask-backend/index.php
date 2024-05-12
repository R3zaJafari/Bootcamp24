<?php
    require_once "vendor/autoload.php";
    include "DatabaseConnection.php";

    // for($i=0 ; $i<100000000 ; $i++)
    // {
       
    //     $faker = Faker\Factory::create();

    //     $name = $faker->name();
    //     $family = $faker->lastName();
    //     $age = $faker->numberBetween(1 , 80);
    //     $gender = $faker->numberBetween(0 , 1);
    //     $mobile = '0'.$faker->numberBetween('9111111111' , '9999999999');
    //     $national = $faker->country();
    //     $code = $faker->unique()->numberBetween('1' , '100000000');
    //     $about = $faker->sentence(3);
    //     $married = $faker->numberBetween(0 , 1);
        
    //     $sql = "INSERT INTO `users` (`id`, `name`, `family`, `age`, `gender`, `mobile`, `national`, `code`, `about`, `married`) VALUES (NULL, '$name', '$family', '$age', '$gender', '$mobile', '$national', '$code', '$about', '$married');";
        
    //     $run = mysqli_query($conn , $sql);
    // }

    $sqlMenCount = "SELECT * FROM users WHERE gender='1'";
    $sqlWomenCount = "SELECT * FROM users WHERE gender='0'";
    $sqlWomenCountAboveSixty = "SELECT * FROM users WHERE gender='0' And age>'60'";
    $sqlWomenCountAboveSixtyAndSingle = "SELECT * FROM users WHERE gender='0' And age>'60' AND married='0' ";

    $mens = mysqli_query($conn , $sqlMenCount)->num_rows;
    $women = mysqli_query($conn , $sqlWomenCount)->num_rows;

    $womenAboveSixty = mysqli_query($conn , $sqlWomenCountAboveSixty)->num_rows;
    // $menAgeArray = mysqli_query($conn , $sqlMenAge)->num_rows;

    $womenAboveSixtyAndSingle = mysqli_query($conn , $sqlWomenCountAboveSixtyAndSingle)->num_rows;
    
    
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>به دلیل کمبود فضا 5751 میلیون کاربر سخته شده</h2>
    <div style="border: salmon solid 2px ; ">
        تعداد خانم ها
        <br>
        <?php echo $women ?>
    </div>
    <div style="border: salmon solid 2px ;">
        تعداد اقایان
        <br>
        <?php echo $mens ?>
    </div>

    <div style="border: salmon solid 2px ;">
        تعداد خانم های بالا 60 سال 
        <br>
        <?php echo $womenAboveSixty ?>
    </div>

    <div style="border: salmon solid 2px ;">
        تعداد خانم های مجرد بالا 60 سال 
        <br>
        <?php echo $womenAboveSixtyAndSingle ?>
    </div>
    
       
    
</body>
</html>