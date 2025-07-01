<?php
class Paginas extends Controllers{
    public function sobre(){
        $dados = ['titulo'=>'Página Sobre nós','descricao'=>'Somos a maior empresa de tecnologia do Brasil','contato'=>'Estamos localizados na rua das flores, jardim das maravilhas...'];
        $this->view('paginas/sobre', $dados);
    }//fim do método sobre

    public function index(){
        $dados = ['titulo'=>'Página Inicial','descricao'=>'Aula de PHP Orientada a Objetoso com MVC.'];
        $this->view('paginas/home', $dados);
    } //fim da função index

    public function contato(){
        
    }
} // fim da classe paginas