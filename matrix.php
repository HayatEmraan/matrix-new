<!DOCTYPE html>
<head>
    <title>Matrix Calculator Using PHP</title>
</head>
<?php
    $first_results = '';
    $second_results = '';
    $third_results = '';
    $fourth_results = '';
    $hello = '';
    if(isset($_POST["math"])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];
        $fourth = $_POST['fourth'];
        $fifth = $_POST['fifth'];
        $sixth = $_POST['sixth'];
        $seven = $_POST['seven'];
        $eight = $_POST['eight'];
        $mathtime = $_POST['math'];
        $hello = array (
            array ($first, $second,$fifth, $sixth),
            array ($third, $fourth,$seven, $eight)
        );
        array_push($hello, "Array");
        echo "<pre>";
        print_r($hello);
        echo "<pre>";
        if(is_numeric($first) && is_numeric($second) && is_numeric($third) && is_numeric($fourth) && is_numeric($fifth) && is_numeric($sixth) && is_numeric($seven) && is_numeric($eight)) {
            if($mathtime == "ADD") {        
                $first_results = $first + $fifth;
                $second_results = $second + $sixth;
                $third_results = $third + $seven;
                $fourth_results = $fourth + $eight;
            }
            else if($mathtime == "SUB") {
                $first_results = $first - $fifth;
                $second_results = $second - $sixth;
                $third_results = $third - $seven;
                $fourth_results = $fourth - $eight;
            }
            else if($mathtime == "MULTI") {
                $first_results = $first * $fifth;
                $second_results = $second * $sixth;
                $third_results = $third * $seven;
                $fourth_results = $fourth * $eight;
            }
        }

    }
?>
<body>
    <?php
     print_r($hello);
    ?>
    <h2>This is Matrix Calculator Demo Using PHP and HTML</h2>
    <form method = "POST">
        <h3>Input Your 1st Number Below!</h3>
        <div class = "form">
        <lavel>1st Number</lavel>
        <input type = "Number" name = "first" value = "first">
        <lavel>2nd Number</lavel>
        <input type = "Number" name = "second" value = "second">
        <br>
        <lavel>3rd Number</lavel>
        <input type = "Number" name = "third" value = "third">
        <lavel>4th Number</lavel> 
        <input type = "Number" name = "fourth" value = "fourth">       
        <br>
        <h3>Input Your 2nd Number Below!</h3>
        <lavel>5st Number</lavel>
        <input type = "Number" name = "fifth" value = "fifth">
        <lavel>6nd Number</lavel>
        <input type = "Number" name = "sixth" value = "sixth">
        <br>
        <lavel>7rd Number</lavel>
        <input type = "Number" name = "seven" value = "seven">
        <lavel>8th Number</lavel> 
        <input type = "Number" name = "eight" value = "eight"> 
        <br>
        <h3>Your Output Results Will Show here!</h3>
        <lavel>First Results</lavel>
        <input name = "Results" name = "first_results" value = "<?php echo $first_results;?>">
        <lavel>Second Results</lavel>
        <input name = "Results" name = "second_results" value = "<?php echo $second_results;?>">
        <br>
        <lavel>Third Results</lavel>
        <input name = "Results" name = "third_results" value = "<?php echo $third_results;?>">
        <lavel>Fourth Results</lavel>
        <input name = "Results" name = "fourth_results" value = "<?php echo $fourth_results;?>">
        </div>
        <br>
        <br>
        <div id = "submit">     
        <input type = "submit" name = "math" value = "ADD">        
        <input type = "submit" name = "math" value = "SUB">       
        <input type = "submit" name = "math" value = "MULTI">
        </div>
    </form>
</body>
</html>