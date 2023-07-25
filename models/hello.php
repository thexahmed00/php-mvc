<?php

class HelloModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","mia");
        return $this->viewModel;
    }
}


?>