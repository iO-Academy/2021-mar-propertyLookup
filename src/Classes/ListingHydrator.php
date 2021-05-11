<?php


namespace ListingsApp\Classes;


class ListingHydrator
{

    public function getListing(PDO $db, string $agent_ref): Listing

    {
        $query= $db->prepare("SELECT * FROM `listings` WHERE `AGENT_REF` = {$agent_ref};");
        $query->setFetchMode(PDO::FETCH_CLASS, Listing::class );
        $query->execute();
        return $query->fetch();
    }

}

