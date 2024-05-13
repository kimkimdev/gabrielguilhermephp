<?php 

require_once "Dao.php";
$dao =new Dao();

$dados = $dao->listar();
?>
<div class="container mt-3">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php
while($linha = $dados->fetch())
{
    ?>
    <tr>
      <th scope="row"><?php echo $linha['id']?></th>
      <td><?php echo $linha['usuario']?></td>
      <td><?php echo $linha['senha']?></td>
      <td><a href="exibirUsuario.php?id=<?php echo $linha['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg></a></td> 
    </tr>  
    <?php
}
?>
  </tbody>
</table>
</div>