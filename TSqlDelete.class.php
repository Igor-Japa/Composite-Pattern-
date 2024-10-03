<?php
/*Classe Delete
*Essa classe provê emios para manipulação de uma instrução de DELETE no BD
*/
final class TSqlDelete extends TSqlInstruction{
    /*Metodo getInstruction()
    *retorna a instrução de Delete em forma de string
    */
    public function getInstruction(){
        //monta a string do DELETE
        $this->sql="DELETE FROM {$this->entity}";
        //retorna a clausula WHRE do objeto $this->criteria
        if($this->criteria)
{
    $expression=$this->criteria->dump();
    IF($expression){
        $this->sql.='WHERE'. $expression;
    }
    return $this->sql;
}    }
}





?>