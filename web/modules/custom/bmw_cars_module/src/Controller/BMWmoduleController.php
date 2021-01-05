<?php

namespace  Drupal\bmw_cars_module\Controller;

use Drupal\Core\Controller\ControllerBase; 

class BMWmoduleController extends ControllerBase {


    public function listCars(){
       
      // $cars=  \Drupal::entityTypeManager()->getStorage($entity_type)->loadMultiple([1, 2, 3]);

     

      $entity = \Drupal::entityTypeManager()->getStorage('node');
      $query = $entity->getQuery();

     // $ids = $query->condition('status', 1)->condition('type', 'cars')->execute();
      

      //$cars = $entity->loadMultiple($ids);

      $imageUrl = $entity->get('field_car_image')->entity->uri->value;

      $IDs = $this->$entity
      ->get('node')
      ->condition('type', 'cars')->execute();

      $cars = $entity->loadMultiple($IDs);

     //// $cars = $this->entityTypeManager->getStorage('node')->loadMultiple($IDs);


        return array (
                '#title' => 'Car list',
                '#theme' => 'bmwcars',
                '#cars' => $cars
        );

        $renderable = [
            '#title' => 'Car list',
            '#theme' => 'bmwcars',
            '#cars' => $cars,
          ];
          $rendered = \Drupal::service('renderer')->renderPlain($renderable);
    

    }

   

}
