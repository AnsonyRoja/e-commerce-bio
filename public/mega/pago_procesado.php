<?php
session_start();
print_r($_GET);
ECHO "POST------------<BR>";
print_r($_POST);
ECHO "SESSION------------<BR>";
print_r($_SESSION);
/*
include_once 'Objetos/XML.php';
class LeerXML{
    
    function leerXML($resultado){
        //echo $resultado;
        $xml = new XML();

        $dato= new SimpleXMLElement($resultado);
        
        $xml->setControl($dato->control);
        $xml->setCodAfiliacion($dato->cod_afiliacion);
        $xml->setFactura($dato->factura);
        $xml->setMonto($dato->monto);
        $xml->setEstado($dato->estado);
        $xml->setCodigo($dato->codigo);
        $xml->setDescripcion($dato->descripcion);
        $xml->setVtid($dato->vtid);
        $xml->setSeqnum($dato->seqnum);
        $xml->setAuthid($dato->authid);
        $xml->setAuthname($dato->authname);
        $xml->setTarjeta($dato->tarjeta);
        $xml->setReferencia($dato->referencia);
        $xml->setTerminal($dato->terminal);
        $xml->setLote($dato->lote);
        $xml->setRifBanco($dato->rifbanco);
        $xml->setAfiliacion($dato->afiliacion);
        $xml->setVoucher($dato->voucher);
        
        echo "Transacción exitosa. Control: ".$xml->getControl();

    }
}
$a= new LeerXML();
*/
?>