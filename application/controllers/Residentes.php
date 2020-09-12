<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residentes extends CI_Controller {

  public function index(){

    $this->load->helper('utilidades'); // Cargamos el helper para utlizar la funciones

    $data = array(
      'nombre'    => 'Erith Ortiz',
      'email'     => 'erith.armentta@gmail.com',
      'direccion' => 'De los castilleros 31k'
    );

    // se agrego esta utilidad en el utilidades_helper
    // $data['nombre'] = strtoupper( $data['nombre'] );
    // $data['direccion'] = strtoupper( $data['direccion'] );

    $campos_capitalizar = array( 'nombre', 'direccion' ); // que campos quiero capitalizar

    $data = capitalizarArray( $data , $campos_capitalizar ); // (Campo recibido u original, campos a capitalizar)

    echo json_encode( $data );

  }

  public function Residente( $id ){
    $this->load->model('Residente_model');
    $Residente = $this->Residente_model->getResidente( $id );

    echo json_encode( $Residente );

  }

}
