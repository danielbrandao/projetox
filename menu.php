<nav class="navbar-center">
  <div class="container">
    <div class="navbar-header">
      <ul class="nav nav-justified">
        <li><a href="?pg=principal">Home</a></li>
        <?php 
           $busca = "Select * from paginas order by id";

           $todos = mysqli_query($conn, $busca);

           while($dados = mysqli_fetch_array($todos)) {
            
        ?>
    		<li>
          <a href="?pg=<?= $dados['link'];?>"><?= $dados['nome'];?></a>
        </li>
        <?php
          } 
        ?>
    		<li><a href="?pg=faleconosco">Fale conosco</a></li>
      </ul>
    </div>
  </div>
</nav>
