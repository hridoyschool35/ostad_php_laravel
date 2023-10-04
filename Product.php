<?php
class Product {
    // TODO: Add properties
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // TODO: Add getFormattedPrice method 
    private function getFormattedPrice() {
        return sprintf("%.2f\n", $this->price);
    }

    // TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details: <br>
        - ID: {$this->id} <br>
        - Name: {$this->name} <br>
        - Price: {$this->getFormattedPrice()} ";
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

?>