<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 16:00
 */

namespace Aston\Cart;


class Product
{
    private $name;
    private $quantity;

    /**
     * Product constructor.
     * @param $name
     * @param $quantity
     */
    public function __construct($name, $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }




}