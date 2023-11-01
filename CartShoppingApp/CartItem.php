<?php
class CartItem
{
    private Product $product;
    private int $quantity;


    //  Generate constructor with all properties of the class
    public function __constructor(Product $product,$quantity)
    {
        $this->$product=$product;
        $this->$quantity=$quantity;
    }
    //  Generate getters and setters of properties
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }
    
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product=$product;
    }
    public function increaseQuantity($amount=1)
    {
        if($this->getQuantity()+ $amount > $this->getProduct()->getAvailableQuantity())
                {
                    echo "We Don't have more than ". $this->getProduct()->getAvailableQuantity();
                }
        $this->quantity +=$amount;
        // $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
    }

    public function decreaseQuantity($amount=1)
    {
        if($this->getQuantity()-$amount < 0)
                {
                    echo "the item quantity in your card is already ZERO";
                }
                else{
                    $this->quantity -=$amount;
                }
        // $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
    }
}