<?php 
    require 'classForm.php';
    $form = new Form($_POST);
?>


<form action="#" method="post">
    <?php 
        echo $form->input('username');
        echo $form->select('country');
        echo $form->textarea('message');
        echo $form->check('checkbox');
        echo $form->radio('radio');
        echo $form->submit();
    ?>
</form>