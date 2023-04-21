<header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1>Miracle Network</h1>
                </div>
            <nav class="col-5">
                <ul>
                    <li><a href="<?php echo BASE_URL?>"><i class="las la-home"></i>Домой</a></li>
                    <li><a href="<?php echo BASE_URL.'information.php'?>"><i class="las la-info-circle"></i>Информация</a></li>
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                        <a href="<?php echo BASE_URL?>"><i class="las la-user"></i><?php echo $_SESSION['login']; ?></a>
                    <ul>
                        <?php if ($_SESSION['admin']): ?>
                        <li><a href="">Panel</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo BASE_URL.'logout.php' ?>">Личный кабинет</a></li>
                    </ul>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL.'registration.php'?>"><i class="las la-user"></i>Войти</a>
                    <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
        </div>
    </header>