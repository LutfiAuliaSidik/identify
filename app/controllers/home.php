<?php
class home extends controller
{
  public function index()
  {
    $this->view('template/header/header');
    $this->view('home/index');
    $this->view('template/footer/footer');
  }
}
