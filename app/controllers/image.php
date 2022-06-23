<?php
class image extends controller
{
  public function index()
  {
    $this->view('template/header/header');
    $this->view('image/image');
    $this->view('template/footer/footer');
  }
}
