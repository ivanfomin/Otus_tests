<?php

namespace App\Models;

use App\Core\Model;
use App\Core\Db;

class Card extends Model
{
    public static $table = 'cards';

    public $number;
    public $holder;
    public $cvv;
    public $money;

    public static function findByNumber(int $number)
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE number=:number';
        $data = $db->query($sql, [':number' => $number], static::class);
        return $data[0] ?? false;
    }


}