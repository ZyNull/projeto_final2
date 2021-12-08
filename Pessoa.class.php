<?php
    //  cria classe Pessoa
    class PessoaReal {
        // atributos
        private $nome;
        private $sobrenome;
        private $endereço;
        private $cidade;
        private $selecionar;

        // métodos get e set
        function setNome($Nome) {
            $this->nome = $Nome;
        }

        function getNome() {
            return $this->nome;
        }

        function setIdade($Idade) {
            $this->idade = $Idade;
        }

        function getIdade() {
            return $this->idade;
        }

        function setNacionalidade($Nacionalidade) {
            $this->nacionalidade = $Nacionalidade;
        }

        function getNacionalidade() {
            return $this->nacionalidade;
        }

        function setNaturalidade($Naturalidade) {
            $this->naturalidade = $Naturalidade;
        }

        function getNaturalidade() {
            return $this->naturalidade;
        }
    }
?>