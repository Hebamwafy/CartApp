<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    //  Generate constructor with all properties of the class
    //  Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function __construct($id ,$title , $price , $availableQuantity)
    {
        $this->id = $id;
        $this->title= $title;
        $this->price= $price ; 
        $this->availableQuantity = $availableQuantity;
    }
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id= $id;
    }


    
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title=$title;
    }
    
    
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }
    
    public function setAvailableQuantity($aQuantity)
    {
        $this->availableQuantity=$aQuantity;
    }
    
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        //Implement method
        return $cart->addProduct($this,$quantity);
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        // Implement method
        return $cart->removeProduct($this);
    }
}