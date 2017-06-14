<?php

class conexao_mysqli {

    var $host='localhost', $user='root', $password='', $database='ProgWeb2017', $query, $conex, $result;
    private static $instancia;

    private function __construct() { }

    /**
     * Método construtor com singleton da classe que gerencia com o banco de dados
     * @return a única instância da conexão com o banco de dados
     */
    public static function getInstancia()
    {
        if (null === static::$instancia) {
            static::$instancia = new static();
        }
        return static::$instancia;
    }

    /**
     * Método que abre conexão com o banco de dados
     */
    function conectar() {
        $this->conex = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->conex) {
            echo "<br/>Falha na conexao com o Banco de Dados!<br />";
            echo "<br/>Erro: " . mysqli_error($this->conex);
            die();
        }
    }

    /**
     * Método que executa uma query no banco de dados
     */
    function executeQuery($sql) {
        if ($this->conex) {
            $this->query = $sql;
            if ($this->result = mysqli_query($this->conex, $this->query)) {
                $this->desconectar();
                return $this->result;
            } else {
                echo "<br/>Ocorreu um erro na execução da SQL";
                echo "<br/>Erro : " . mysqli_error($this->conex);
                echo "<br/>SQL: " . $sql;
                die();
            }
        }
    }

    /**
     * Método que fecha conexão com o banco de dados
     */
    function desconectar() {
        return mysqli_close($this->conex);
    }

}

?>