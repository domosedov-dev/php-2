<?php


namespace App\Models;


use App\Model;

class GiftCard extends Model implements Orderable
{
    public const TABLE = 'cards';

    use HasPriceTrait;

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }
}