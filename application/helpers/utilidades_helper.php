<?php

function capitalizarArray( $dataOriginal, $camposaCapitalizar ){

  $data_lista = $dataOriginal;

  foreach ($dataOriginal as $nombre_campo => $valor_campo) {

    if( in_array( $nombre_campo, array_values($camposaCapitalizar) ) ){

      $data_lista[ $nombre_campo ] = strtoupper( $valor_campo );

    }

  }


  return $data_lista;

}

function obtenerMes( $mes ){

  $mes -=1;

  $meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
  );

  return $meses[$mes];
}

?>
