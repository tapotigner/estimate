<div class="menu-container">
    <div class="logo-container">
        <img src="<?php echo ROOT_URL ?>src/public/images/logo-mini.png" style="width: 100px;height: 100px">
        <h1 class="logo-title">Estimate</h1>
    </div>
    <?php if (\Mouf::getUserService()->getLoggedUser()): ?>
    <div class="user-container">
        <span class="user-container-text">
            <?php
                $user = \Mouf::getUserService()->getLoggedUser();
                echo "Bonjour ".$user->getLogin();
            ?>
        </span>
    </div>
    <?php endif; ?>
</div>