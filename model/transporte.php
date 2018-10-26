<?php
class Transporte
{
	private $pdo;

		public $id;
		public $Folio;
    public $Cliente;
    public $Marca;
		public $Cantidad;
    public $Destino;
    public $Servicio;
		public $FH_Carga;
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

	public function Obtener($id)
	{

		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM folios WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Avanzada($id)
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

	public function Actualizar($data)
	{
		$user = $_POST['txtusuario'];
		try
		{
			$sql = "UPDATE folios SET
						FH_Arribo = current_timestamp,
						Usuario2 = '".$usuario."',
						Estatus = 'En patio',
						Observaciones = ?,
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Folio,
							$data->Cliente,
							$data->Marca,
							$data->Cantidad,
							$data->Destino,
							$data->Servicio,
							$data->FH_Carga,
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
							$data->Observaciones,
							$data->id

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
//Proceso...
	public function Actualizar2($data)
	{
		include 'control/validar.php';
		try
		{
			$sql = "UPDATE folios SET
						FH_Inicio_CarDesc = current_timestamp,
						Usuario3 = '".$usuario."',
						Estatus = 'En proceso de carga/descarga',
				    WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Cliente,
							$data->Marca,
							$data->Cantidad,
							$data->Destino,
							$data->Servicio,
							$data->FH_Carga,
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
							$data->Observaciones,
							$data->Folio

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar3($data)
	{
		include 'control/validar.php';
		try
		{
			$sql = "UPDATE folios SET
						FH_Conclu_CarDesc = current_timestamp,
						Usuario4 = '".$usuario."',
						Estatus = 'En patio',
				    WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Cliente,
							$data->Marca,
							$data->Cantidad,
							$data->Destino,
							$data->Servicio,
							$data->FH_Carga,
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
							$data->Observaciones,
							$data->Folio

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar4($data)
	{
		include 'control/validar.php';
		try
		{
			$sql = "UPDATE folios SET
						FH_Salida_Caseta = current_timestamp,
						Usuario5 = '".$usuario."',
						Estatus = 'En patio',
				    WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Cliente,
							$data->Marca,
							$data->Cantidad,
							$data->Destino,
							$data->Servicio,
							$data->FH_Carga,
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
							$data->Observaciones,
							$data->Folio

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(Transporte $data)
	{
		$user = $_POST['txtusuario'];
		try
		{
		$sql = "INSERT INTO folios VALUES (?, ?, ?, ?, ?, ?, ?, 'Por arribar', current_timestamp,'".$user."',?);";

		$this->pdo->prepare($sql)
		     ->execute(
				array(

			  $data->Folio,
        $data->Cliente,
        $data->Marca,
				$data->Cantidad,
        $data->Destino,
        $data->Servicio,
				$data->FH_Carga,
		    $data->Estatus,
		    $data->FH_Cedic,
		    $data->Usuario1,
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
