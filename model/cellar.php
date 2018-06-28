<?php
/**
 * Created by PhpStorm.
 * User: aleons
 * Date: 23.06.18
 * Time: 23:30
 */

class Cellar
{
    private $name;
    private $price;
    private $discountPrice;



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param mixed $discountPrice
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;
    }



    /**
     * Cellar constructor.
     */
    public function __construct()
    {
    }

    public function toString(){
        return "{" .
            "\"name\":\"" . $this->name ."\",\n".
            "\"price\":\"" . $this->price ."\",\n".
            "\"discountPrice\":\"" . $this->discountPrice ."\"".
            '}';
    }


}