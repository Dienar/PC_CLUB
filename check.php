        
 <?php 
     if (isset($_POST['formSubmit'])){
       $numberform= filter_var(trim($_POST['number']),FILTER_SANITIZE_STRING);
        $passwordform= filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
        $passwordform = md5($passwordform."ghkalk2j5");
          $mysqli = new mysqli("localhost","root","","pie-18");
         
        if(mb_strlen($numberform) < 11 || mb_strlen($numberform) > 16){
            
            include_once 'index.php';
             echo '<script type="text/javascript">';
            echo ' alert("Недопустимое количетсво символов")';
            echo '</script>';
             exit();
         }
        
        
        $number = '"'.$mysqli->real_escape_string($numberform).'"';
        $password = '"'.$mysqli->real_escape_string($passwordform).'"';
         
        
        
        
        $result1 = $mysqli->query("SELECT * FROM `users` WHERE `number` = $number AND `password` = $password");
        $user = $result1->fetch_assoc();
        if(($user) == 0){
            $query = "INSERT INTO `users` (`number`,`password`) VALUES ($number,$password)";
            include_once 'main.php';
            echo '<script type="text/javascript">';
            echo ' alert("Вы зарегистрированы")';
            echo '</script>';
        $result1 = $mysqli->query($query);
        
        $mysqli->close();
            
        }else{
        $_SESSION['logged_user'] = $user;
        include_once 'main.php';
        echo '<script type="text/javascript">';
        echo ' alert("Вы успешно вошли в аккаунт")';
        echo '</script>';
        $mysqli->close();
      }
       
         
         
     }


    
     ?>