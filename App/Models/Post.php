<?php
// test
namespace App\Models;

use PDO;

class Post extends \Core\Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, title, body, photo FROM posts');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
