<?php

namespace App\Models;

use PDO;

class Menu extends \Core\Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name, slug FROM menus');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
