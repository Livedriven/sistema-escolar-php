<?php
class CadastrosRecentes{
    //Atributo para guarda um array de objetos
    //no php é um array associativo
    private $historico = [];

    //Metodo construtor privado pois somente a propria classe
    //Vai poder ter acesso a ele
    private function __construct(){

    }

    //Metodo para obtermos a instancia dessa classe.
    //Note que o metodo e statico justamente para não precisarmos
    //do metodo construtor que somente a classe tem
    public static function getInstance(){
        //Verifica se tem uma sessão iniciada, se não tive inicia uma
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        //Verifica se a instancia da classe já existe na sessão
        //Caso não exita ele mesmo cria a instancia na sessão
        if(!isset($_SESSION["historico"])|| !($_SESSION["historico"] instanceof self)){
            $_SESSION["historico"] = new self();
        }

        //retorna a instancia na sessão
        return $_SESSION["historico"];
    }

    //Função que adiciona no array historico os cadastros mais recentes
    public function adicionar(Pessoa $pessoa){
        //Função nativa do php que permite a adição no inicio do array
        //Sem a necessidade de fazer isso manualmente
        array_unshift( $this->historico, $pessoa);

        //Verificação para garantir que o array não passe de 10 itens
        if(count($this->historico) > 10){
            //Ele corta o array excluindo o indice 10
            //Retorna um array com os indices de 0 a 9
            $this->historico = array_slice($this->historico,0,10);
        }
    }

    //Função que retorna o array de historico
    public function getHistorico():array{
        //retorno do array historico
        return $this->historico;
    }
}

?>