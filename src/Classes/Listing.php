<?php


namespace ListingsApp\Classes;


class Listing
{
 protected string $agent_ref;
 protected string $address_1;
 protected string $address_2;
 protected string $town;
 protected string $postcode;
 protected string $description;
 protected int $bedrooms;
 protected int $price;
 protected string $image;
 protected int $type;
 protected int $status;

    /**
     * Listing constructor.
     * @param string $agent_ref
     * @param string $address_1
     * @param string $address_2
     * @param string $town
     * @param string $postcode
     * @param string $description
     * @param int $bedrooms
     * @param int $price
     * @param string $image
     * @param int $type
     * @param int $status
     */
    public function __construct(string $agent_ref, string $address_1, string $address_2, string $town, string $postcode, string $description, int $bedrooms, int $price, string $image, int $type, int $status)
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
     * @return int
     */
    public function getBedrooms(): int
    {
        return $this->bedrooms;
    }

    /**
     * @return int
     */
    public function getPrice(): int
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
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
        if ($this === 1){
            return "For Sale";
        }
    }


}
