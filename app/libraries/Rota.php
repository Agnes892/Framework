<?php
class Rota{
    private $controlador = "Paginas";
    private $metodo = 'index';
    private $parametros = [];
    public function __construct(){
        //echo 'criando a primeira classe';
        $url = $this->url() ? $this->url(): [0];
        if(file_exists('../app/Controllers/'.ucwords($url[0].'.php'))){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        require_once '../app/Controllers/'. $this->controlador.'.php';
        $this->controlador = new $this->controlador;

        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
            $this->metodo = $url[1];
            unset($url[1]);
            } // Verifica se o método existe
        } // Fim do if que verifica se o método existe 

        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo],$this->parametros);
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