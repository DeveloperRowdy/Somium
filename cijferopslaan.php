<?php
    session_start();
    require_once "config.php";
    $username = $_SESSION["username"];
    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
        header ("Location: index.php");
    }
   echo $_COOKIE['nederlands1'];
    
    // Prepare a select statement
    $sql = "UPDATE `cijfers` SET `aardrijkskunde1` = ?, `aardrijkskunde2` = ?, `aardrijkskunde3` = ?, `biologie1` = ?, `biologie2` = ?, `biologie3` = ?, `duits1` = ?, `duits2` = ?,`duits3` = ?, `engels1` = ?, `engels2` = ?,`engels3` = ?, `informatica1` = ?, `informatica2` = ?,`informatica3` = ?, `LO1` = ?, `LO2` = ?,`LO3` = ?, `natuurkunde1` = ?, `natuurkunde2` = ?,`natuurkunde3` = ?, `nederlands1` = ?, `nederlands2` = ?,`nederlands3` = ?, `scheikunde1` = ?, `scheikunde2` = ?,`scheikunde3` = ?, `wiskunde1` = ?, `wiskunde2` = ?,`wiskunde3` = ? WHERE `username` = ?";      
    
     if($stmt = mysqli_prepare($link, $sql)){
         echo 'dit mag';
         
         // Bind variables to the prepared statement as parameters
        //mysqli_stmt_bind_param($stmt, "sss", $param_vak, $param_cijfer, $param_username);
        mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssss", $param_aardrijkskunde1, $param_aardrijkskunde2, $param_aardrijkskunde3, $param_biologie1, $param_biologie2, $param_biologie3, $param_duits1, $param_duits2, $param_duits3, $param_engels1, $param_engels2, $param_engels3, $param_informatica1, $param_informatica2, $param_informatica3, $param_LO1, $param_LO2, $param_LO3, $param_natuurkunde1, $param_natuurkunde2, $param_natuurkunde3, $param_nederlands1, $param_nederlands2, $param_nederlands3, $param_scheikunde1, $param_scheikunde2, $param_scheikunde3, $param_wiskunde1, $param_wiskunde2, $param_wiskunde3, $param_username);
        
        // Set parameters
        //$param_vak = '`engels1`';
		
        $param_username = $username;
        $param_aardrijkskunde1 = $_COOKIE["aardrijkskunde1"];
        $param_aardrijkskunde2 = $_COOKIE["aardrijkskunde2"];
        $param_aardrijkskunde3 = $_COOKIE["aardrijkskunde3"];
        $param_biologie1 = $_COOKIE["biologie1"];
        $param_biologie2 = $_COOKIE["biologie2"];
        $param_biologie3 = $_COOKIE["biologie3"];
        $param_duits1 = $_COOKIE["duits1"];
        $param_duits2 = $_COOKIE["duits2"];
        $param_duits3 = $_COOKIE["duits3"];
        $param_engels1 = $_COOKIE["engels1"];
        $param_engels2 = $_COOKIE["engels2"];
        $param_engels3 = $_COOKIE["engels3"];
        $param_informatica1 = $_COOKIE["informatica1"];
        $param_informatica2 = $_COOKIE["informatica2"];
        $param_informatica3 = $_COOKIE["informatica3"];
        $param_LO1 = $_COOKIE["LO1"];
        $param_LO2 = $_COOKIE["LO2"];
        $param_LO3 = $_COOKIE["LO3"];
        $param_natuurkunde1 = $_COOKIE["natuurkunde1"];
        $param_natuurkunde2 = $_COOKIE["natuurkunde2"];
        $param_natuurkunde3 = $_COOKIE["natuurkunde3"];
        $param_nederlands1 = $_COOKIE["nederlands1"];
        $param_nederlands2 = $_COOKIE["nederlands2"];
        $param_nederlands3 = $_COOKIE["nederlands3"];
        $param_scheikunde1 = $_COOKIE["scheikunde1"];
        $param_scheikunde2 = $_COOKIE["scheikunde2"];
        $param_scheikunde3 = $_COOKIE["scheikunde3"];
        $param_wiskunde1 = $_COOKIE["wiskunde1"];
        $param_wiskunde2 = $_COOKIE["wiskunde2"];
        $param_wiskunde3 = $_COOKIE["wiskunde3"];
          
        if(mysqli_stmt_execute($stmt)){
     
            
        } else{
         echo 'dit niet';
        } 
    
    } else{
        echo 'dit niet 2';
    }
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>