<?php

$numero= rand(1,100);

if($numero>50){
   echo "<i style= 'font-size: 50px';> El número <span style= 'color: green';>$numero</span> es mayor a <span style= 'color: red';>50</span></i>"; 
} else if($numero==50){
   echo "<i style= 'font-size: 50px';> El número <span style= 'color: red';>$numero</span> es igual a <span style= 'color: red';>50</span></i>"; 
}else{
   echo "<i style= 'font-size: 50px';> El número <span style= 'color: blue';>$numero</span> es menor a <span style= 'color: red';>50</span></i>";   
}

?>
