<?php
require_once 'model/transporte.php';

class TransporteController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Transporte();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/transporte/transporte.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/transporte/transporte-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $alm = new Transporte();

        $alm->id = $_REQUEST['id'];
        $alm->Folio = $_REQUEST['Folio'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Marca = $_REQUEST['Marca'];
        $alm->Cantidad = $_REQUEST['Cantidad'];
        $alm->Destino = $_REQUEST['Destino'];
        $alm->Servicio = $_REQUEST['Servicio'];
        $alm->FH_Carga = $_REQUEST['FH_Carga'];
        $alm->Estatus = $_REQUEST['Estatus'];
	      $alm->FH_Cedic = $_REQUEST['FH_Cedic'];
	      $alm->Usuario1 = $_REQUEST['Usuario1'];
	      $alm->FH_Arribo = $_REQUEST['FH_Arribo'];
	      $alm->Usuario2 = $_REQUEST['Usuario2'];
	      $alm->FH_Inicio_CarDesc = $_REQUEST['FH_Inicio_CarDesc'];
	      $alm->Usuario3 = $_REQUEST['Usuario3'];
	      $alm->FH_Conclu_CarDesc = $_REQUEST['FH_Conclu_CarDesc'];
	      $alm->Usuario4 = $_REQUEST['Usuario4'];
	      $alm->FH_Salida_Caseta = $_REQUEST['FH_Salida_Caseta'];
	      $alm->Usuario5 = $_REQUEST['Usuario5'];
	      $alm->Observaciones = $_REQUEST['Observaciones'];

        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);


        header('Location: index.php');
    }

    public function Avanzada(){
        $this->model->Avanzada($_REQUEST['id']);
        header('Location: index.php');
    }
}
?>
