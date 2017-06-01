<?php
  class Zdefteri extends Controller{
      function __construct(){
          parent::__construct();
      }
      public function index(){
        $this->view->title = 'Ziyaretçi Defteri';
        $this->view->render('header');
        $this->view->render('zdefteri/index');
        $this->view->render('footer');
          
      }
      
      public function getZDefteriAll(){
         echo  $this->model->getZdefteri();
      }
  }
?>
