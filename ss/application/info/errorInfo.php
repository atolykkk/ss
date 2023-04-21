<?php if(count($errormsg)>0): ?>
    <?php foreach ($errormsg as $error): ?>
        <p><?=$error;?></p>
        <?php endforeach; ?>
        <?php endif; ?>