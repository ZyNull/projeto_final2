<?php
    //  cria classe Pessoa
    class Pessoa{
        // atributos
        private $nome;
        private $sobrenome;
        private $endereco;
        private $cidade;
        private $selecionar;

        // métodos get e set
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setSelecionar($selecionar) {
            $this->selecionar = $selecionar;
        }

        public function getSelecionar() {
            return $this->selecionar;
        }
    }
?>