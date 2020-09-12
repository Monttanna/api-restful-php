<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function index()
  {
    echo 'Hello World!';
  }

  public function comments( $id )
  {

    if( !is_numeric($id) ){
      $respuesta = array('err' => true, 'msg' => ' El id tiene que se numerico');
      echo json_encode( $respuesta );
      return;
    }

    $comentatios = array(
      array('id' => 0, 'msg' => 'Me encanta el culo de mi vieja'),
      array('id' => 1, 'msg' => 'Me gusta el chocolate'),
      array('id' => 2, 'msg' => 'amo la programacion')
    );

    if( $id >= count($comentatios) OR $id < 0){
      $respuesta = array('err' => true, 'msg' => ' El id no existe');
      echo json_encode( $respuesta );
      return;
    }

    echo json_encode( $comentatios[$id] );
  }

}
