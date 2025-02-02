<?php
    
    if (isset($_POST['formSubmitwo'])){
        $summform= $_POST['summ'];
         $cartnform= $_POST['cartn'];
         $datacform= $_POST['datac'];
         $codeform= $_POST['code'];
           $mysqli = new mysqli("localhost","root", "","dannie-pop");
           
        if ($mysqli->connect_errno){
            echo "Извините";
            exit;
        }
        $summ = '"'.$mysqli->real_escape_string($summform).'"';
        $cartn = '"'.$mysqli->real_escape_string($cartnform).'"';
        $datac = '"'.$mysqli->real_escape_string($datacform).'"';
        $code = '"'.$mysqli->real_escape_string($codeform).'"';

        $query = "INSERT INTO `data` (`summ`,`cart`,`data_card`,`code`) VALUES ($summ,$cartn,$datac,$code)";
        $result = $mysqli->query($query);
        if ($result){
            echo '<script type="text/javascript">';
        echo ' alert("Баланс пополнен ожидайте")';
        echo '</script>';
        include_once 'main.php';
            
        }
        $mysqli->close();
        
         }
         

    ?>