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
    public $FH Cedic;
    public $Usuario1;
    public $FH Arribo;
    public $Usuario2;
    public $FH Inicio CarDesc;
    public $Usuario3;
    public $FH Conclu CarDesc;
    public $Usuario4;
    public $FH Salida Caseta;  
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
                        $data->FH Arribo, 
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
		try 
		{
		$sql = "INSERT INTO folios (Folio,Cliente,Marca,Destino,Servicio,Estatus,FH Cedic,Usuario1,FH Arribo,Usuario2,FH Inicio CarDesc,Usuario3,FH Conclu CarDesc,Usuario4,FH Salida Caseta,Usuario5,Observaciones) 
		        VALUES (Usuario ?, ?, ?, ?, ?, ?, current_timestamp, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Folio,
                    $data->Cliente, 
                    $data->Marca, 
                    $data->Destino,
                    $data->Servicio,
		    $data->Estatus,
		    $data->FH Cedic,
		    $data->Usuario1,
		    $data->FH Arribo,
		    $data->Usuario2,
	    	    $data->FH Inicio CarDesc,
		    $data->Usuario3,
		    $data->FH Conclu CarDesc,
		    $data->Usuario4,
	 	    $data->FH Salida Caseta,
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