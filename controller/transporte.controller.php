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
    public function Inicio(){
        require_once 'view/cab.php';
        require_once 'view/transporte/transporte.php';
        require_once 'view/footer.php';
    }
    public function L1bre(){
        require_once 'view/header.php';
        require_once 'view/transporte/L1bre.php';
        require_once 'view/footer.php';
    }
    public function Logistica(){
        require_once 'view/header.php';
        require_once 'view/transporte/Logistica.php';
        require_once 'view/footer.php';
    }
    public function Movilidad(){
        require_once 'view/header.php';
        require_once 'view/transporte/Movilidad.php';
        require_once 'view/footer.php';
    }
    public function Proyectos(){
        require_once 'view/header.php';
        require_once 'view/transporte/Proyecto.php';
        require_once 'view/footer.php';
    }
    public function Recibo(){
        require_once 'view/header.php';
        require_once 'view/transporte/Recibo.php';
        require_once 'view/footer.php';
    }
    public function Retail(){
        require_once 'view/header.php';
        require_once 'view/transporte/Retail.php';
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
    public function Actua(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/transporte/caseta.php';
        require_once 'view/footer.php';
    }
    public function Actuaout(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/transporte/casetaout.php';
        require_once 'view/footer.php';
    }
    public function Cargaini(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/cab.php';
        require_once 'view/transporte/inicar.php';
        require_once 'view/footer.php';
    }
    public function Cargaout(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/cab.php';
        require_once 'view/transporte/fincar.php';
        require_once 'view/footer.php';
    }
    public function Guardar(){
        $alm = new Transporte();

        //$alm->id = $_REQUEST['id'];
        $alm->Folio = $_REQUEST['Folio'];
        $alm->Area = $_REQUEST['Area'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Marca = $_REQUEST['Marca'];
        $alm->Cantidad = $_REQUEST['Cantidad'];
        $alm->Destino = $_REQUEST['Destino'];
        $alm->Servicio = $_REQUEST['Servicio'];
        $alm->FH_Carga = $_REQUEST['FH_Carga'];
        $alm->Estatus = $_REQUEST['Estatus'];
        //$alm->FH_Cedic = $_REQUEST['FH_Cedic'];
        $alm->Usuario1 = $_REQUEST['Usuario1'];
        //$alm->FH_Carga = $_REQUEST['Cortina'];
        //$alm->FH_Carga = $_REQUEST['FH_Arribo'];
        //$alm->FH_Carga = $_REQUEST['Usuario2'];
        //$alm->FH_Carga = $_REQUEST['FH_Inicio_CarDesc'];
        //$alm->FH_Carga = $_REQUEST['Usuario3'];
        //$alm->FH_Carga = $_REQUEST['FH_Conclu_CarDesc'];
        //$alm->FH_Carga = $_REQUEST['Usuario4'];
        //$alm->FH_Carga = $_REQUEST['FH_Salida_Caseta'];
        //$alm->FH_Carga = $_REQUEST['Usuario5'];
	    $alm->Observaciones = $_REQUEST['Observaciones'];

        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);


        header('Location: index.php');
    }
    public function GActua(){
        $alm = new Transporte();


        $alm->Cortina = $_REQUEST['Cortina'];
        //$alm->FH_Arribo = $_REQUEST['FH_Arribo'];
        $alm->Usuario2 = $_REQUEST['Usuario2'];
        $alm->Estatus2 = $_REQUEST['Estatus2'];
        $alm->Observaciones2 = $_REQUEST['Observaciones2'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Actualizar($alm);


        header('Location: index.php');

    }
    public function GActuaout(){
        $alm = new Transporte();



        //$alm->FH_Arribo = $_REQUEST['FH_Arribo'];
        $alm->Usuario5 = $_REQUEST['Usuario5'];
        $alm->Estatus5 = $_REQUEST['Estatus5'];
        $alm->Observaciones5 = $_REQUEST['Observaciones5'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar4($alm)
            : $this->model->Actualizar4($alm);


        header('Location: index.php');

    }
    public function GCarga(){
        $alm = new Transporte();



        //$alm->FH_Arribo = $_REQUEST['FH_Arribo'];
        $alm->Usuario3 = $_REQUEST['Usuario3'];
        $alm->Estatus3 = $_REQUEST['Estatus3'];
        $alm->Observaciones3 = $_REQUEST['Observaciones3'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar2($alm)
            : $this->model->Actualizar2($alm);


        header('Location: index.php');

    }
    public function GCargaout(){
        $alm = new Transporte();



        //$alm->FH_Arribo = $_REQUEST['FH_Arribo'];
        $alm->Usuario4 = $_REQUEST['Usuario4'];
        $alm->Estatus4 = $_REQUEST['Estatus4'];
        $alm->Observaciones4 = $_REQUEST['Observaciones4'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar3($alm)
            : $this->model->Actualizar3($alm);


        header('Location: index.php');

    }
    public function Avanzada(){
        $this->model->Avanzada($_REQUEST['id']);
        header('Location: index.php');
    }

    public function update1(){

    }
}
?>
