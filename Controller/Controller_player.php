<?php

class Controller_player extends Controller {

    public function action_creation(){
        $m = Model::getModel();

        if (!isset($_POST["submit"])) {
            $this->action_creation_form();
        }

        $players_list = $m->get_players_list();
        $data = ["", $players_list];

        foreach ($players_list as $value) {
            if($value['name'] == $_POST['name']) {
                $data[0] = "Cet identifiant existe déjà.";
                $this->render("creation", $data);
            }
        }

        if ($_POST['numbers'] == null) {$_POST['numbers'] = NULL;}
        if ($_POST['stars'] == null) {$_POST['stars'] = NULL;}

        $m->player_creation($_POST['name'],$_POST['numbers'], $_POST['stars']);

        $data[0] = "Le compte a été crée";

        $this->render("creation", $data);
    }

    public function action_show() {
        $data = [""];
        $this->render("home", $data);
    }

    public function action_creation_form() {
        $m = Model::getModel();
        $players_list = $m->get_players_list();
        $data = ["", $players_list];
        $this->render("creation", $data);
    }
    
    public function action_default()
    {
        $this->action_creation_form();
    }
}