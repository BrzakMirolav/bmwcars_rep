<?php

namespace  Drupal\bmw_cars_module\Controller;

//use Drupal\Core\Controller\ControllerBase; 
//class BMWmoduleController extends ControllerBase {

class BMWmoduleController {

    public function hello(){
        return array (
                '#title' => 'Hello world!',
                '#markup' => 'This is some content'
        );
    }



}
