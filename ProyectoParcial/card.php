<?php 
include('./ArrayUsuario.php');
for($i=0; $i < count($usuario) ; $i++){
 echo '<div class="card" style="width: 18rem;">
 <img src="' . $usuario[$i]['img'] . '" class="card-img-top">
 <div class="card-body">
 <h5 class="card-title"> '  . $usuario[$i]['Nombre'] . '</h5>
 <p  class="card-text" >   ' . $usuario[$i]['Nacimiento'] . '</p>
 <p class="card-text">' . $usuario[$i]['Correo'] . '</p>
 <p class="card-text"><img src="img/ocupacion.png"/>' . $usuario[$i]['Ocupacion'] . '</p>
 <p class="card-text"> <img src="img/direccion.png"/>' . $usuario[$i]['Direccion'] . '</p>
 <p class="card-text">' . $usuario[$i]['Numero'] . '</p>

 </div>
</div>';
}
?>

 <img src="C:\wamp64\www\dsidiurno\ProyectoParcial\img\direction_gps_location_map_maps_navigation_pin_icon_123198.png" alt="" >

 <img src="https://cdn.icon-icons.com/icons2/1993/PNG/512/direction_gps_location_map_maps_navigation_pin_icon_123198.png" alt="" >

 <img src="img/direction_gps_location_map_maps_navigation_pin_icon_123198.png" />
 <img src="img/direccion.png">
    
 <img src="img/ocupacion.png"/>
 <img src="img/telefono.png"/>
 <img src="img/fecha(1).png"/><img src="img/"/><img src="img/"/>