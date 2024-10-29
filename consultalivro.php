<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form>
    <h1>Consulta:</h1>
    <br>
    <table>
        <tr>
            <th>Id</th>
            <th>Categoria</th>
            <th>Estoque</th>
            <th>Título</th>
            <th>Editora</th>
            <th>Autor</th>
            <th>Ano de fabricação</th>
            <th>Disponibilidade</th>
        </tr>

      <tbody>

         <?php
         include "conexao.php";

         $sql = "SELECT * FROM livros";

         $dados = mysqli_query($con, $sql);

         while ($linha = mysqli_fetch_array($dados)) {
            $id_livros = $linha['id_livros'];
            $categoria = $linha['categoria'];
            $estoque = $linha['estoque'];
            $titulo = $linha['titulo'];
            $editora = $linha['editora'];
            $autor = $linha['autor'];
            $ano_fabri = $linha['ano_fabri'];
            $disponibilidade = $linha['disponibilidade'];

            echo "<tr>
                    <td>$$id_livros</td>
                    <td>$categoria</td>
                    <td>$$estoque</td>
                    <td>$titulo</td>
                    <td>$editora</td>
                    <td>$autor</td>
                    <td>$ano_fabri</td>
                    <td>$disponibilidade</td>
                 </tr>";
        }
        ?>

      </tbody>
    </table>
    <br> <br>
    <a href="menu.html">Voltar</a>
    </form>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html>
