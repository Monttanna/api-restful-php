<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meses extends CI_Controller {

  public function mes( $mes ) {

    $this->load->helper('utilidades');
    echo json_encode( obtenerMes( $mes ) );
    // lo emeigramos al helper de utilidades
    // $mes -=1;
    //
    // $meses = array(
    //   'Enero',
    //   'Febrero',
    //   'Marzo',
    //   'Abril',
    //   'Mayo',
    //   'Junio',
    //   'Julio',
    //   'Agosto',
    //   'Septiembre',
    //   'Octubre',
    //   'Noviembre',
    //   'Diciembre'
    // );
    //
    // echo json_encode( $meses[$mes] );
  }

}
