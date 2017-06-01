<?php
  class Bireyler extends Controller{
      function __construct(){
          parent::__construct();
      }
      public function index(){
        $this->view->title = 'Bireyler';
        $this->view->render('header');
        $this->view->render('bireyler/index');
        $this->view->render('footer');
          
      }
  }
?>
