<?php

class Controller_home extends Controller {

    public function action_home(){
        $m = Model::getModel();

        $data = $m->test();
        $this->render("home", $data);
    }
    
    public function action_default()
    {
        $this->action_home();
    }
}