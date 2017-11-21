<?php

  class homeController extends controller{

    public function index(){

      $db = new DBhome();

        $dados = array(
          'quantidade' => $db->getQuantidade(),
          'nome' => $db->getNome(),
          'idade' => $db->getIdade()
        );
        $this->loadTemplate('home',$dados);

    }

  }

 ?>
