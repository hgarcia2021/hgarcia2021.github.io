<?php
    if (isset($_SESSION['errorCanjeo'])) { ?>
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php
            echo $_SESSION['errorCanjeo'];
            unset($_SESSION['errorCanjeo']);
        ?>    
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
 <?php   } ?>