<?php
/*NÃO MEXA, POR FAVOR! */

// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">+ New Client</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Name</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="lastname" id="sobrenome">
                <label for="lastname">Lastname</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="age" id="idade">
                <label for="age">Age</label>
            </div>
            <button type="submit" name="btn-register" class="btn">register</button>
            <a href="index.php" type="submit" class="btn red">Cancel</a>
        </form>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>