<?php 

 public function atualizarStatus($id,$status) {//update

            echo 'deu certo';
            
            $query = '
                UPDATE 
                    tb_tarefas
                SET 
                    id_status = $status
                WHERE 
                    id = $id
            ';

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
    
        }


?>