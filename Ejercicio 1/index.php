<h1>Codigo HTML</h1>

<?php
  echo "<h1>Codigo PHP</h1>";
  print("Hola");
  
  //$nombre = "Victor Robles";

  $nombre=existeParametro("nombre", false); 


  $texto = "Repaso de PHP con $nombre";
   $altura = existeParametro("altura", true); 

  
   if(isset($_GET["altura"])){
    $altura = $_GET["altura"];    
   }else{
    $altura=180;
   }

  $textoFinal = "<h1>".$texto. ", su altura es :" .$altura. "</h1>";

  echo $textoFinal;
  echo $textoFinal;
  echo $textoFinal;

  //Contenido original mas lo que se pone aqui 
  $textoFinal .="Te eh troleado my bro";
  echo $textoFinal;

  //**GET, lo que se va a pasar por la url 
  echo "<hr>";  
  $nombre=existeParametro("nombre", false); 
  //*
  if($altura >= 180){
    echo  '<h3 style="background:green; color:white;">Eres una persona alta</h3>';
  }else{
    echo "<h3>Eres una persona bajita</h3>";
  }

   function existeParametro($paramtro, $numero){
      
     if(isset($_GET[$paramtro])){
          $nombre = $_GET[$paramtro];    
        }else{ 
           $valor = "Texto defecto";
           if($numero ){ 
            $valor = 18;
          }
        }       
      return $valor;

      //*ARRAYS

      $personas =["Victor", "Fran", "Paco"];
      echo $personas[1];

      
      
  }
?>

<h1>Listado</h1>
<ul>
    <?php
        $personas =["Victor", "Fran", "Paco"];
        echo $personas[1];
  
        foreach($personas as $nombre){
            echo "<li>$nombre</li>";
        }
    ?>
</ul>