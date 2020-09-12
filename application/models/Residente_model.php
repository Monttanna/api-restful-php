<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Residente_model extends CI_Model {

  public $id;
  public $nombre;
  public $correo;


// Aqui se tiene el CRUD - Create, Request, Update, Delete Residente

  public function crearResidente(){

    return "Residente agregado";

  }

  public function getResidente( $id ){

    $this->id = intval( $id );
    $this->nombre = 'Erith Ortiz';
    $this->correo = 'erith.armenta@gmail.com';

    return $this;

  }

  public function updateResidente(){

    return "Residente actualizado";

  }

  public function deleteResidente(){

    return "Residente eliminado";

  }



}
