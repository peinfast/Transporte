<?php
class Transporte
{
	private $pdo;

    public $Folio;
    public $Cliente;
    public $Marca;
    public $Destino;
    public $Servicio;
    public $Estatus;
    public $FH_Cedic;
    public $Usuario1;
    public $FH_Arribo;
    public $Usuario2;
    public $FH_Inicio_CarDesc;
    public $Usuario3;
    public $FH_Conclu_CarDesc;
    public $Usuario4;
    public $FH_Salida_Caseta;
    public $Usuario5;
    public $Observaciones;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($Folio)
	{

		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM folios WHERE Folio = ?");


			$stm->execute(array($Folio));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($Folio)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM folios WHERE Folio = ?");

			$stm->execute(array($Folio));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE folios SET
						FH Arribo         = ?,
						Usuario2        = ?,
				    WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->FH_Arribo,
                        $data->Usuario2


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Transporte $data)
	{
		include '../control/validar.php';
		try
		{
		$sql = "INSERT INTO folios (Folio,Cliente,Marca,Destino,Servicio,Estatus,FH Cedic=current_timestamp,Usuario1='$usuario',FH Arribo=null,Usuario2=null,FH Inicio CarDesc=null,Usuario3=null,FH Conclu CarDesc=null,Usuario4=null,FH Salida Caseta=null,Usuario5=null,Observaciones)
		        VALUES ( ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Folio,
                    $data->Cliente,
                    $data->Marca,
                    $data->Destino,
                    $data->Servicio,
		    $data->Estatus,
		    $data->FH_Cedic,
		    $data->Usuario1,
		    $data->FH_Arribo,
		    $data->Usuario2,
	    	    $data->FH_Inicio_CarDesc,
		    $data->Usuario3,
		    $data->FH_Conclu_CarDesc,
		    $data->Usuario4,
	 	    $data->FH_Salida_Caseta,
		    $data->Usuario5,
		    $data->Observaciones

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
