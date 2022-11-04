

<?php
//*Definir una clase para comenzar , el nombre de la clase simpre inicia con mayuscula*/
   class Book{
     //*PROPIEDADES: caracteristicas de nuestros objetos
     //*METODOS: Definen el comportamiento de nuestros objetos 
     //*Metodo constructor recibe nuestras propiedades
     //*¿Que es lo que puede hacer nuestro objeto?
      public function __construct( 
        public string $author,
        public string $title, 
        public float $price,  
        public int $stock,  
        public int $id){ //echo "Soy una instancia de Book";
     }

     public function getInfo(){
          $info ="<b>{$this->title}</b> escrito por: <i> {$this->author}</i> <br> 
          precio: {$this->price }      
          <br> ID:{$this->id}  <br>";

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
  


   //*Ingresar a las propiedades
//    echo $book2 -> title;
//    echo "<br>";
//    echo $book2 -> author;
?>