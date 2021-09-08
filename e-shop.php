<?php 

class EShop {

    // mettiamo una lista di prodotti

}

// ---------------------------------------------

class Product {

}

Class TechProduct extends Product {

}

Class BeautyProduct extends Product {
    
}

// ---------------------------------------------

class Credit{
    protected $creditBrand;
    protected $creditNumber;
    public function __construct($brand, $creditNumber)
    {   
        $this->creditBrand = $brand;
        $this->creditNumber= $creditNumber;   
    }
}

class User {
    protected $id; 
    protected $name ;
    protected $surname;
    protected int $sconto ;
    protected $cartaDiCredito=[];

}

class StandardUser extends User{

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.

    public function __construct($name, $surname)
    {   
        $this->name = $name;
        $this->surname= $surname;
        $this->id = $name . (rand(1000, 2000)). $surname;
        $this->sconto = 5;    
        
    }

    public function getSconto() {
        return $this->sconto;
    }
    
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        $userName = $this->name. " ". $this->surname; 
        return  $userName;
    }
     
    public function putCreditCard (Credit $creditCard){
        $this->cartaDiCredito = $creditCard;   
    }
}
class SpecialUser extends User{

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.

    public function __construct($name, $surname)
    {   
        $this->name = $name;
        $this->surname= $surname;
        $this->id = $name . (rand(1000, 2000)). $surname;
        $this->sconto = 15;    
        
    }

    public function getSconto() {
        return $this->sconto;
    }
    
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        $userName = $this->name. " ". $this->surname; 
        return  $userName;
    }
     
    public function putCreditCard ($creditCard){
        $this->cartaDiCredito = $creditCard;
    }
}

class PremiumUser extends User{

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.

    public function __construct($name, $surname)
    {   
        $this->name = $name;
        $this->surname= $surname;
        $this->id = $name . (rand(1000, 2000)). $surname;
        $this->sconto = 30;    
        
    }

    public function getSconto() {
        return $this->sconto;
    }
    
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        $userName = $this->name. " ". $this->surname; 
        return  $userName;
    }
     
    public function putCreditCard ($creditCard){
        $this->cartaDiCredito = $creditCard;
    }
}

$gianni = new PremiumUser ("Gianni","Rodari");
$visa = new Credit ("Visa", "4023600525688995");
var_dump($visa);

var_dump($gianni);

// ----------------------------------------------


/*
1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/ 