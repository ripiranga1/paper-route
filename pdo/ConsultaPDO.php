<?php
include_once 'ConexaoPDO.php';

class ConsultaPDO {

    // Retorna ... pertencentes ao banco		
    public function general_query ($qry) {
        $retorno = false;
        try {			
			$conn = ConexaoPDO::getConexao()->Conectar();
			$conn->exec("set names utf8");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
		    //executa a instrução de consulta
            $result = $conn->query($qry);

            if( $result ) {
	            //percorre os resultados via o laço foreach
                foreach($result as $linha){
				    $retorno[] = $linha; 
		        }
			}
			//fecha a conexão
	        $conn = null;
	    } catch (PDOExecption $e) {
	        echo "Falha: " . $e->getMessage();
	    }
	    //fecha a conexão
	    $conn = null;
	    return $retorno;
	}
	
	// Retorna ... pertencentes ao banco		
    public function general_insert ($qry) {
        $retorno = false;
        try {			
            $conn = ConexaoPDO::getConexao()->Conectar();
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
            
            //executa a instrução de consulta
            
            if ($conn->query($qry)) $retorno = true;
            //fecha a conexão
            $conn = null;
        } catch (PDOExecption $e) {
            echo $e;
        }
        //fecha a conexão
        $conn = null;
        return $retorno;
    }


    // Retorna ... pertencentes ao banco		
    public function general_update ($qry) {
        $retorno = false;
        try {			
            $conn = ConexaoPDO::getConexao()->Conectar();
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
            
            //executa a instrução de consulta
            
            if ($conn->query($qry)) $retorno = true;
            //fecha a conexão
            $conn = null;
        } catch (PDOExecption $e) {
            echo $e;
        }
        //fecha a conexão
        $conn = null;
        return $retorno;
    }


    // Retorna ... pertencentes ao banco		
    public function general_delete ($qry) {
        $retorno = false;
        try {			
            $conn = ConexaoPDO::getConexao()->Conectar();
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
            
            //executa a instrução de consulta
            
            if ($conn->query($qry)) $retorno = true;
            //fecha a conexão
            $conn = null;
        } catch (PDOExecption $e) {
            echo $e;
        }
        //fecha a conexão
        $conn = null;
        return $retorno;
    }
}