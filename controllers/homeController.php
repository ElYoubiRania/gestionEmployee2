<?php
//require_once CLASSES.DS.'controller.php';
class homeController {
    public function construct(){}

    public function index(){
        //Pas de données à gérer
        //La vue à afficher est la vue index
        require_once CLASSES.DS.'renderView.php';
        $v=new renderView();
        $v->render('home','index');
    }
}
?>