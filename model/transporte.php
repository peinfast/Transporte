<?php
class Transporte
{
		private $pdo;

		public $id;
		public $Folio;
		public $Area;
    public $Cliente;
    public $Marca;
		public $Cantidad;
    public $Destino;
    public $Servicio;
		public $FH_Carga;
    public $Estatus;
    public $FH_Cedic;
    public $Usuario1;
		public $Observaciones;
    public $Cortina;
    public $FH_Arribo;
    public $Usuario2;
		public $Estatus2;
		public $Observaciones2;
    public $FH_Inicio_CarDesc;
    public $Usuario3;
		public $Estatus3;
		public $Observaciones3;
    public $FH_Conclu_CarDesc;
    public $Usuario4;
		public $Estatus4;
		public $Observaciones4;
    public $FH_Salida_Caseta;
    public $Usuario5;
		public $Estatus5;
		public $Observaciones5;

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

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Estatus5 != 'Liberado de Cedic' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function L1bre()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "L1bre"');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Logistica()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "Logistica Inversa"');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Movilidad()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "Movilidad"');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Proyectos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "Proyectos"');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Recibo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "Recibo"');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Retail()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare('SELECT * FROM folios WHERE Area = "Retail"');
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

		try
		{

			//$date = date('Y-m-d H:i:s');
			$sql = "UPDATE folios  SET Estatus2 = ?, Cortina = ?, FH_Arribo = now(), Usuario2 = ?, Observaciones2 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus2,
							$data->Cortina,
							//$data->FH_Arribo,
							$data->Usuario2,
							$data->Observaciones2,
							$data->Folio


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

		try
		{
			$sql = "UPDATE folios  SET Estatus3 = ?, FH_Inicio_CarDesc = now(), Usuario3 = ?, Observaciones3 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus3,
							//$data->FH_Arribo,
							$data->Usuario3,
							$data->Observaciones3,
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
		try
		{
			$sql = "UPDATE folios  SET Estatus4 = ?, FH_Conclu_CarDesc = now(), Usuario4 = ?, Observaciones4 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus44,
							//$data->FH_Arribo,
							$data->Usuario4,
							$data->Observaciones4,
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
		try
		{
			$sql = "UPDATE folios  SET Estatus5 = ?, FH_Salida_Caseta = now(), Usuario5 = ?, Observaciones5 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
							$data->Estatus5,
							//$data->FH_Arribo,
							$data->Usuario5,
							$data->Observaciones5,
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

		try
		{
		$sql = "INSERT INTO folios (Folio, Area, Cliente, Marca, Cantidad, Destino, Servicio, FH_Carga, Estatus, Usuario1, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(

			$data->Folio,
        	$data->Area,
        	$data->Cliente,
            $data->Marca,
			$data->Cantidad,
            $data->Destino,
            $data->Servicio,
		    $data->FH_Carga,
		    $data->Estatus,
		    //$data->FH_Cedic,
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
