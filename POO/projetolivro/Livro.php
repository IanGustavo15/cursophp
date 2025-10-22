<?php 
require_once "Pessoa.php";
require_once "Publicacao.php";
    class Livro implements Publicacao
    {   // Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Métodos 

        public function detalhes(): void
        {
            echo "-----------------------------------------------";
            echo "<p>Livro <em>". $this->getTitulo() ."</em> escrito por <em>". $this->getAutor() . "</em></p>";
            echo "<p>Páginas: <em>" . $this->getTotPaginas() ."</em> no total e atualemnte na página <em>". $this->getPagAtual()."</em></p>";
            echo "<p>Sendo lido por <em>" . $this->leitor->getNome() . "</em>.</p><br>";
        }
        
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($pag){
            if ($pag > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $pag;
            }
        }
        public function avancarPag(){
            $this->pagAtual ++;
        }
        public function voltarPag(){
            $this->pagAtual --;
        }
        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }
        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of autor
         */ 
        public function getAutor()
        {
                return $this->autor;
        }
        /**
         * Set the value of autor
         *
         * @return  self
         */ 
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        /**
         * Get the value of totPaginas
         */ 
        public function getTotPaginas()
        {
                return $this->totPaginas;
        }
        /**
         * Set the value of totPaginas
         *
         * @return  self
         */ 
        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        /**
         * Get the value of pagAtual
         */ 
        public function getPagAtual()
        {
                return $this->pagAtual;
        }
        /**
         * Set the value of pagAtual
         *
         * @return  self
         */ 
        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }

        /**
         * Get the value of aberto
         */ 
        public function getAberto()
        {
                return $this->aberto;
        }
        /**
         * Set the value of aberto
         *
         * @return  self
         */ 
        public function setAberto($aberto)
        {
                $this->aberto = $aberto;

                return $this;
        }

        /**
         * Get the value of leitor
         */ 
        public function getLeitor()
        {
                return $this->leitor;
        }
        /**
         * Set the value of leitor
         *
         * @return  self
         */ 
        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;

                return $this;
        }


    }
    
?>