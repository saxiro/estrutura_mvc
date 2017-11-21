<?php

    class galeriaController extends controller{
      public function index(){
        $db = new DBgaleria();
          $dados = array(
            'qt' => $db->getQuantidade()
          );
          $this->loadTemplate('galeria',$dados);

      }
    }

 ?>
