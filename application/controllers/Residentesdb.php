<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residentesdb extends CI_Controller {

  public function Residentes_beta(){

    $this->load->database();
    $query = $this->db->query('SELECT id, nombre, correo, celular FROM tblresidentes');

    // foreach ($query->result() as $row)
    // {
    //   echo $row->id;
    //   echo $row->nombre;
    //   echo $row->correo;
    // }

    // echo 'Total Results: ' . $query->num_rows();
    //
    $respuesta = array(
      'err' => FALSE,
      'msg' => 'Registros cargados correctamente',
      'tota_records' => $query->num_rows(),
      'residentes' => $query->result()
    );

    echo json_encode( $respuesta );

  }

  public function Residente( $id ) {

    $this->load->database();
    $query = $this->db->query('SELECT * FROM tblresidentes WHERE id  = ' . $id );
    $fila = $query->row();
    if( isset( $fila ) ){
      $respuesta = array(

        'err' => FALSE,
        'msg' => 'Registros cargados correctamente',
        'tota_records' => $query->num_rows(),
        'residente' => $fila
      );

    } else {

      $respuesta = array(
        'err' => TRUE,
        'msg' => 'El residente con id = ' . $id . ' no existe',
        'tota_records' => $query->num_rows(),
        'residente' => null
      );

    }

    echo json_encode( $respuesta );

  }

}
