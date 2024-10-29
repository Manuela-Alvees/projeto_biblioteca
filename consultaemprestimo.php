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
            <th>Id - Cliente</th>
            <th>Id - Usuario</th>
            <th>Id - Livros</th>
            <th>Data Empréstimo</th>
            <th>Data Devolução</th>
        </tr>

      <tbody>

         <?php
         include "conexao.php";

         $sql = "SELECT * FROM emprestimo";

         $dados = mysqli_query($con, $sql);

         while ($linha = mysqli_fetch_array($dados)) {
            $id_emprestimo = $linha['id_emprestimo'];
            $id_cliente = $linha['id_cliente'];
            $id_usuario = $linha['id_usuario'];
            $id_livros = $linha['id_livros'];
            $data_emprestimo = $linha['data_emprestimo'];
            $data_devol = $linha['data_devol'];

            echo "<tr>
                    <td>$id_emprestimo</td>
                    <td>$id_cliente</td>
                    <td>$id_usuario</td>
                    <td>$id_livros</td>
                    <td>$data_emprestimo</td>
                    <td>$data_devol</td>
                 </tr>";
        }
        ?>

      </tbody>
    </table>
    <br> <br>
    <a href="index.html">Voltar</a>
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
