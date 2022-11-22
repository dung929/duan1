<?php
require_once('controllers/base_controller.php');
require_once('models/city.php');

class CityController extends BaseController
{
    function __construct()
    {
        $this->folder = 'city';
    }

    public function index()
    {
        $cities = City::all();
        $data = array('cities' => $cities);
        $this->render('index', $data);
    }

    public function show()
    {
        $cities = City::all();
        $data = array('cities' => $cities);
        $this->render('show', $data);
    }
}
