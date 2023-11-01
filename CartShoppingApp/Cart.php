<?php
require_once "Product.php";
require_once "CartItem.php";

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    // Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
     
    public function addProduct(Product $product, int $quantity): CartItem
    {
        $cartItem= $this->findCartItem($product->getId());
        if( $cartItem===null)
        {
            $cartItem=new CartItem();
            $this->items[]=$cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
        
    }
    //function to find product in the cart
    private function findCartItem(int $productId)
    {

        foreach($this->items as $item)
        {
            if($item->getProduct()->getId()===$productId)
            {
                return $item->getProduct();
            }
        }
       return null;
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        // Implement method
        $cartItem= $this->findCartItem($product->getId());
        $index= array_search($cartItem , $this->items);
        unset($this->items[$index]);

    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        // Implement method
        $sum=0;
        foreach($this->items as $item)
        {
            $sum+=$item->getQuantity();
        }
        return $sum;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        // Implement method
        $totalSum=0;
        foreach($this->items as $item)
        {
            $totalSum+=$item->getQuantity() * $item->getProduct()->getPrice();
        }
        return $totalSum;
    }

   
}