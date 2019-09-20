<?php

class carController extends Controller
{

    public function index()
    {
        $this->model('carmodel', []);
        $this->view('car/index', ['cars' => $this->model->getCars()]);
        $this->view->render();

    }

}