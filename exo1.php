<?php
if(isset($_GET['iteration']) && $_GET['iteration'] === '10'){
    for($i = 0; $i < $_GET['iteration']; $i++){
        echo "Hello Wolrd".$i. "<br>";
    }
}else{
    header("Location:index.php?error=1");
}

