<?php

class Controller_player extends Controller {

    public function action_creation(){
        if (!isset($_POST["submit"])) {
            $this->action_show();
        }
        $m = Model::getModel();

        $m->player_creation($_POST['name']);

        $data = [];
        $this->render("creation", $data);
    }

    public function action_show() {
        $data = [];
        $this->render("home", $data);
    }
    
    public function action_default()
    {
        $this->action_show();
    }
}