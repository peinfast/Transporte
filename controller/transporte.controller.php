<?php
require_once 'model/transporte.php';

class TransporteController{
    
    private $model;
    
    public function__CONSTRUCT(){
        $this->model = new Transporte();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/transporte/transporte.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Transporte();
        
        if(isset($_REQUEST['Folio'])){
            $alm = $this->model->Obtener($_REQUEST['Folio']);
        }
        
        require_once 'view/header.php';
        require_once 'view/transporte/transporte-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Transporte();
        
        $alm->Folio = $_REQUEST['Folio'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Marca = $_REQUEST['Marca'];
        $alm->Destino = $_REQUEST['Destino'];
        $alm->Servicio = $_REQUEST['Servicio'];
        $alm->Estatus = $_REQUEST['Estatus'];
	$alm->FH Cedic = $_REQUEST['FH Cedic'];
	$alm->Usuario1 = $_REQUEST['Usuario1'];
	$alm->FH Arribo$_REQUEST['FH Arribo'];
	$alm->Usuario2 = $_REQUEST['Usuario2'];
	$alm->FH Inicio CarDesc$_REQUEST['FH Inicio CarDesc'];
	$alm->Usuario3 = $_REQUEST['Usuario3'];
	$alm->FH Conclu CarDesc$_REQUEST['FH Conclu CarDesc'];
	$alm->Usuario4 = $_REQUEST['Usuario4'];
	$alm->FH Salida Caseta$_REQUEST['FH Salida Caseta'];
	$alm->Usuario5 = $_REQUEST['Usuario5'];
	$alm->Observaciones = $_REQUEST['Observaciones'];

      
           
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
?>