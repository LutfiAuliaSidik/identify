<?php
class detail extends controller
{
  public function index()
  {
    $this->view('template/header/header');
    $this->view('system/detail/detail');
    $this->view('template/footer/footer');
  }
}
