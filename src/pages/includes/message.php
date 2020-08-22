<?php
// Session
session_start();
if(isset($_SESSION['mensagem'])):?>
<script>
    // Message
    window.onload = function() {
        M.toast({html: ' <?php echo $_SESSION['mensagem']; ?>'});
    };
</script>

<?php
endif;
session_unset(); // Session clear
?>