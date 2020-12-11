<?php

namespace  Drupal\bmw_cars_module\Controller;

use Drupal\Core\Controller\ControllerBase; 

class BMWmoduleController extends ControllerBase {


    public function list_cars(){
       
      // $cars=  \Drupal::entityTypeManager()->getStorage($entity_type)->loadMultiple([1, 2, 3]);

      /*$car1 = Node::load(1);
      $car2 = Node::load(2);
      $car3 = Node::load(3);

      $cars = array($car1, $car2, $car3 );  */

      $entity = \Drupal::entityTypeManager()->getStorage('node');
      $query = $entity->getQuery();

      $ids = $query->condition('status', 1)->condition('type', 'article')->execute();

      $cars = $entity->loadMultiple($ids);

        return array (
                '#title' => 'Car list',
                '#theme' => 'bmwcars',
                '#cars' => $cars
        );

    }



}
