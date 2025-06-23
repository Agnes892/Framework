<?php
class Rota{
    private $controlador = "Paginas";
    private function __construct(){
        //echo 'criando a primeira classe';
        $this->url();
        var_dump($this);

    }// Fim da função construtor

    public function url(){
        //echo 'Carregando a url';
        echo $_GET['url'];
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        }
    }// Fim da função url

}// Fim da classe rota
?>