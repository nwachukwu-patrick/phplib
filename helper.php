<?php
#functions 
function alert($alert){
          $alart = "<script>alert('$alert')</script>";
          echo $alart;
}
function square($square)
  {
            return $square *= $square;
  }
function prompt($prompt){
  $show = "<script>prompt('$prompt')</script>";
  return $show;
}
function ten_raise_to_pow($base,$power){
  $ans = $base * pow(10,$power);
 return $ans;
}

 class FindA {
  #  var $acceleration;
    var $initial_velocity;
    var $time;
    var $final_velocity;
    var $speed;
  public  function set($final_velocity,$time,$initial_velocity, $speed)
  {
    $this -> initial_velocity = $initial_velocity;
    $this -> final_velocity = $final_velocity;
    $this -> time = $time;
    $this -> speed = $speed;
  }
  public  function get()
  {
  return  $this -> initial_velocity;
   return $this -> final_velocity;
   return $this -> time ;
   return $this -> speed;
  }

 }
function findA($final_velocity,$time,$initial_velocity, $speed)
 {
if ((!is_nan($final_velocity&&$time))&&($speed&&$initial_velocity==01) )
  {
    return $final_velocity/$time;
  }else{return;}
  if (($final_velocity&&$time&&$initial_velocity)&&($speed===01)) 
  {
 return ($final_velocity-$initial_velocity)/$time;
  }else{return;}
  if(($final_velocity&&$initial_velocity&&$speed)&&($time===01))
  {
    return (($final_velocity*$final_velocity)-($initial_velocity*$initial_velocity))/(2*$speed);
  }else{return ;}
 }
 function br($br="<br>")
  {
    echo $br;
  }
  
  ?>