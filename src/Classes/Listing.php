<?php


namespace ListingsApp\Classes;

/**
 * Class Listing
 * @package ListingsApp\Classes
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
     * @return int
     */
    public function getBedrooms(): string
    {
        return $this->bedrooms;
    }
    /**
     * @return int
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
     * @return int
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @return int
     */
    public function getStatus(): string
    {
        if ($this->status === 1) {
            return "For Sale";
        }
    }
}