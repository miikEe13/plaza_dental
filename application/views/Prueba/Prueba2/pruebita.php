<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$u='a70a74029f27c42d6ba8ca14cbaf5a7593086e32';
$B='a70a74029f27c42d6ba8ca14cbaf5a7593086e32';
 $contraseña="";
        $password = sha1($contraseña);
  
        echo $password;
        if ($u==$B) {
            echo 'cierto';
    
}  else {
echo'falso'   ; 
}
?>