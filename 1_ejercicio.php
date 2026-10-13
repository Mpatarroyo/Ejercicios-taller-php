<?php
declare (strict_types = 1);

$A = rand(-5,5);
$B = rand(-5,5);
$C = rand(-5,5);

 echo" <ul style='font-size: 40px';> <li style= 'color: green';>$A</li> <br> <li style= 'color: red';>$B</li> <br> <li style= 'color: blue';>$C</li></ul>";

if($A===$B && $B===$C){
      echo "<i style='font-size: 30px;'>Todos los números son iguales</i>";

}else if($A===$B){
    if($B<$C){
        echo "<i style='font-size: 30px;'>$A es igual a $B y $C es mayor</i>";
    }else {
        echo "<i style='font-size: 30px;'>$A es igual a $B y $C es menor</i>";
}

}else if($A===$C){
    if($C<$B){
        echo "<i style='font-size: 30px;'>$A es igual a $C y $B es mayor</i>";   
    }else {
        echo "<i style='font-size: 30px;'>$A es igual a $C y $B es menor</i>"; 
    }

}else if($B===$C){
    if($C<$A){
        echo "<i style='font-size: 30px;'>$B es igual a $C y $A es mayor</i>";  
    }else{
        echo "<i style='font-size: 30px;'>$B es igual a $C y $A es menor</i>";   
    }

}else if($A>$C && $C>$B){
    if($A>$B){
        echo "<i style='font-size: 30px;'>El número mayor es $A el número menor es $B y el número intermedio es $C</i>";
    }
     
}else if($A>$B && $B>$C){
    if($A>$C){
        echo "<i style='font-size: 30px;'>El número mayor es $A el número menor es $C y el número intermedio es $B</i>";
    }
    
}else if($B>$C && $C>$A){
    if($B>$A){
        echo "<i style='font-size: 30px;'>El número mayor es $B el número menor es $A y el número intermedio es $C</i>";
    }
    
}else if($B>$A && $A>$C){
    if($B>$C){
        echo "<i style='font-size: 30px;'>El número mayor es $B el número menor es $C y el número intermedio es $A</i>";
    }
    
}else if($C>$B && $B>$A){
    if($C>$A){
        echo "<i style='font-size: 30px;'>El número mayor es $C el número menor es $A y el número intermedio es $B</i>";
    }
    
}else if($C>$A && $A>$B){
    if($C>$B){
        echo "<i style='font-size: 30px;'>El número mayor es $C el número menor es $B y el número intermedio es $A</i>";
    }
}

?>