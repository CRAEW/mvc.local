<?php

// Load all data and check where the file is
class CarModel {

    protected static $data_file; // location of file
    protected $inventory = []; // load all data

    public function __construct()
    {
        self:: $data_file = DATA . 'cars.txt';
    }

    private function load()
    {
        if(file_exists(DATA . 'cars.txt'))
        {
            $this->inventory = file(DATA . 'cars.txt');
        }
    }

    // get the inventory
    public function getCars()
    {
        $this->load();
        return $this->inventory;
    }

    // edit the inventory

    // delete the inventory

}





?>