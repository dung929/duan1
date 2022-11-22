<?php

class Client
{
    public $id;
    public $name;
    public $username;
    public $password;
    public $address;
    public $phone;
    public $image;

    function __construct($id, $name, $username, $password, $address, $phone, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->address = $address;
        $this->phone = $phone;
        $this->image = $image;
    }

    /**
     * @return array
     */
    static function checkExist($username)
    {
        $db = DB::getInstance();
        $sql = "SELECT * FROM client WHERE username='$username'";
        $statement = $db->prepare($sql);
        $statement->execute();
        return $statement->fetch();
    }
}