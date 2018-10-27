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

        //$alm->id = $_REQUEST['id']
        $alm->Folio = $_REQUEST['Folio'];
        $alm->Area = $_REQUEST['Area'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Marca = $_REQUEST['Marca'];
        $alm->Cantidad = $_REQUEST['Cantidad'];
        $alm->Destino = $_REQUEST['Destino'];
        $alm->Servicio = $_REQUEST['Servicio'];
        $alm->FH_Carga = $_REQUEST['FH_Carga'];
        $alm->Estatus = $_REQUEST['Estatus'];
        $alm->FH_Cedic = $_REQUEST['FH_Cedic'];
        $alm->Usuario1 = $_REQUEST['Usuario1'];
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
