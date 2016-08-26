<!-- Vista para borrar-->
<form action="<?php echo APP_URL; ?>transactions/delete" method="POST">
    <input type="hidden" name="id" value="<?php echo $transaction["id"]; ?>">
</form>