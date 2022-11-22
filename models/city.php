<?php

class City
{
    public $id;
    public $name;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return array
     */
    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM city');

        foreach ($req->fetchAll() as $item) {
            $list[] = new City($item['id'], $item['name']);
        }

        return $list;
    }
}