<?php

class Categoria
{
    private $nome;
    private static $categorieValide = array("Cane", "Gatto", "Uccelli", "Pesci");
    private $errore;

    public function __construct($nome)
    {
        if ($this->isValidCategoria($nome)) {
            $this->nome = $nome;
        } else {
            $this->errore = "Categoria non valida.";
            $this->nome = null;
        }
    }

    private function isValidCategoria($categoria)
    {
        return in_array($categoria, self::$categorieValide);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getErrore()
    {
        return $this->errore;
    }
}

?>