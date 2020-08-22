<?php
// Connection
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light">CRUD PROCEDURAL PHP PROJECT - Clients List</h4>
        <table class="striped">
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Lastname:</th>
                    <th>Email:</th>
                    <th>Age:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td> <?php echo $dados['nome']; ?> </td>
                    <td> <?php echo $dados['sobrenome']; ?> </td>
                    <td> <?php echo $dados['email']; ?></td>
                    <td> <?php echo $dados['idade']; ?> </td>
                    <td><a href="edit.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange" title="edit"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal <?php echo $dados['id']; ?>" class="btn-floating red btn modal-trigger" title="delete"><i class="material-icons">delete</i></a></td>
                      <!-- Modal Structure -->
                     <div id="modal1" class="modal">
                          <div class="modal-content">
                             <h4>Warning: Do you want to delete your registry?</h4>
                             <p>If you delete, the registry will not come back! Are you sure?</p>
                          </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                           <form action="php_action/delete.php" method="POST">
                             <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                              <button type="submit" name="btn-delete" class="btn red">I agree</button>
                           </form>
                        </div>
                     </div>

                    <?php
                      endwhile; 
                    else:
                      ?>
                      <tr>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                      </tr>
                    <?php
                    endif;
                      ?>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="add.php" class="btn">Add Client</a>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>