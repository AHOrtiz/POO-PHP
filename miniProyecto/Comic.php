<?php
require 'Book.php';

//Herencia

class Comic extends Book {
    public function __construct(  
         $author,
         $title, 
         $price,   
         $stock,   
         $id,
      public array  $ilustrators,
      private int $vol
    )
    {
        parent:: __construct ($author,$title,$price,$stock, $id);
    }
    //*Override : Sobreescribir el metodo colocando lo nuevo 
    public function getInfo(){
       
         $result = "Volumen:$this->vol <br>";

        $ul= "<ul>--Ilustrators--";
        foreach($this->ilustrators as $ilustrator){
            $ul.= "<li>$ilustrator</li>";
        }
        $ul .= "</ul>";

        echo parent::getInfo();
        echo $result .=$ul;

    }
}

$comic1 = new Comic(
    'Alan  Moore',
    'Batman : the killing joke',
    120.00,
    90,
    1,
    ['Brian Bolland', 'John H.'],
    1
);

 echo  $comic1->getInfo();

 //**https://phpsandbox.io/n/withered-term-k4r0-kjraf?files=%2FComic.php */
?>

