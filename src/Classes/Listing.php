<?php


namespace ListingsApp\Classes;

/**
 * Class Listing
 * namespace - ListingsApp\Classes
 */
class Listing
{
 protected string $agent_ref;
 protected string $address_1;
 protected string $address_2;
 protected string $town;
 protected string $postcode;
 protected string $description;
 protected string $bedrooms;
 protected string $price;
 protected string $image;
 protected string $type;
 protected string $status;

    /**
     * Listing constructor. Auto-populated by Hydrator with default properties/constructor in place for unit testing.
     */
    public function __construct(string $agent_ref = '', string $address_1 = '', string $address_2 = '', string $town = '', string $postcode = '', string $description = '', string $bedrooms = '6', string $price = '', string $image = '', string $type = '', string $status = '')
    {
        $this->agent_ref = $agent_ref;
        $this->address_1 = $address_1;
        $this->address_2 = $address_2;
        $this->town = $town;
        $this->postcode = $postcode;
        $this->description = $description;
        $this->bedrooms = $bedrooms;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getAgentRef(): string
    {
        return $this->agent_ref;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address_1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address_2;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getBedrooms(): string
    {
        return $this->bedrooms;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}
