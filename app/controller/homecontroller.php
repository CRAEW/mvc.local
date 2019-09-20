<?php

class homeController extends Controller
{
    public function index($id='',$name='')
    {
        //echo 'I am in ' . __CLASS__ .' method ' . __METHOD__;
        //echo 'Id: is '.$id.' and name is :'.$name;

        $this->view('home/index', [
            'name' => $name,
            'id' => $id
        ]);
    }

    public function aboutUs()
    {
        echo 'I am in ' . __CLASS__ .' method ' . __METHOD__;
    }
}


?>