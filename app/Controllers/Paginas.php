<?php
class Paginas extends Controllers{
    public function sobre(){
        $dados = ['titulo'=>'Pagina Sobre nós.',
        'descricao'=>'Somos a maior empresa de tecnologia do Brasil.','conntato'=>'Estamos localizados na 
        rua das flores, jardim das maravilhas..'];
        $this->view('paginas/sobre', $dados);

    }//fim do método sobre
    public function index(){
        $dados = ['titulo'=>'Página Inicial',
        'descricao'=>'Aula de php Orientada a Objetos com MVC.'];
        $this->view('paginas/home', $dados);
    }//fim da função index
}//fim da classe paginas