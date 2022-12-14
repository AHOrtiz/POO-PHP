<?php
//*Definir una clase para comenzar , el nombre de la clase simpre inicia con mayuscula*/
   class Book{
     //*PROPIEDADES: caracteristicas de nuestros objetos
     //*METODOS: Definen el comportamiento de nuestros objetos 
     //*Metodo constructor recibe nuestras propiedades
     //*¿Que es lo que puede hacer nuestro objeto?
      public function __construct( 
        private string $author,
        private string $title, 
        private float $price,  
        private int $stock,  
        private int $id){ //echo "Soy una instancia de Book";
     }

     public function getInfo(){
          $info ="<b>{$this->title}</b> escrito por: <i> {$this->author}</i> <br> 
          precio: {$this->price }      
          <br> ID:{$this->id}  <br>";

         //*La palabra reservada this hace referencia al objeto que se esta ejecutando el metodo en ese momenton this haria referencia a book1 o book2
           if($this->stock >0){
               $info .= "Piezas disponibles: <span style='color:green'>{$this->stock}</span>";    
       }else{
            $info .= " <span style='color:red'>No disponible</span>";    
       }
         
        return $info;               

        }     
         
         
   }

   //*Instancia de la clase Book

   $book1 = new Book(
      'George O.',
      'Rebelion en la granja',
      199.90,
      0,
      1
   );

  
   echo $book1-> getInfo();
  
   $book2 = new Book(
      'Allison',
      'El arte de tener la razon',
      150.00,
      10,
      2
   );

  echo "<br> <br>";
  echo $book2 -> getInfo();

   //*Ingresar a las propiedades
//    echo $book2 -> title;
//    echo "<br>";
//    echo $book2 -> author;
?>