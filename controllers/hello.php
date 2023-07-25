<?php

class HelloController extends Basecontroller{

  public function __construct($action, $urlValues) {
    parent::__construct($action, $urlValues);
    require("models/hello.php");
    $this->model = new HelloModel(); // Instantiate HelloModel or any other model you are using.
}
  protected function index(){
     $this->view->output($this->model->index());
  }

}

?>