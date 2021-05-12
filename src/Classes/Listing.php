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
    public function __construct(string $agent_ref='CSL123_100259', string $address_1= 'Hill Farm', string $address_2='Plough Hill Road', string $town='Nuneaton', string $postcode='CV11 6PE', string $description='This is a rare opportunity...', string $bedrooms='6', string $price='355000', string $image='CSL123_100327_IMG_00.JPG', string $type='1', string $status='1')
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
        if ($this->status == 1) {
            return "For Sale";
        } elseif ($this->status == 2) {
            return "Sold";
        } elseif ($this->status == 3) {
            return "To Let";
        } elseif ($this->status == 4) {
            return "Let Agreed";
        }
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
