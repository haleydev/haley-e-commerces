    <h1 class="mt-5"><?=$this->title?></h1>

    <?php
         use Model\Conexao;

         $conexao= new Conexao;
         $conexao->mysqli();
         $conexao->conect;
      
      ?>
