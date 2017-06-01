<?php
  class Hakkimizda extends Controller{
      function __construct(){
          parent::__construct();
      }
      public function index(){
        $this->view->title = 'Hakkımızda';
        $this->view->render('header');
        $this->view->render('hakkimizda/index');
        $this->view->render('footer');
          
      }
  }
?>
