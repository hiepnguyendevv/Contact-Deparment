<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php

?>

<body>



    <!-- navbar cua khach -->
    <nav class="navbar navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <img style="width: 50px; height: 50px; padding: 3px"
                src="https://upload.wikimedia.org/wikipedia/vi/b/bc/Logo-Thuy_Loi.png" alt="logo">
            <a href="<?= PATH . '/public/index.php?controller=department&action=index' ?>" class="navbar-brand">Danh bạ điện tử</a>
            <form class="d-flex input-group w-75" action="<?= PATH.'/public/index.php?controller=employee&action=search'?>" method="post">
                <input type="search" class="form-control rounded" name="name" placeholder="Tìm kiếm" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
                <button name="search">Tìm kiếm</button>
            </form>
            <?php if (isset($_SESSION['username']) && $_SESSION['role'] == 'user' ): ?>
                <a class="btn btn-danger" href="<?= PATH . '/public/index.php?controller=user&action=logout' ?>">logout</a>
                
             
                <a href="<?= PATH.'/public/index.php?controller=user&action=profile&id='.$_SESSION['id'] ?>" i class="navbar-text text-decoration-none">
                    <span class="ms-2">
                        <?= $_SESSION['username'] ?>
                    </span>

                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar" width="30" height="30"
                        class="rounded-circle" />
                </a>
                    
            <?php elseif(isset($_SESSION['username']) && $_SESSION['role'] == 'admin' ):?>
                <a class="btn btn-success" href="<?= PATH . '/public/index.php?controller=employee&action=index'?>">Admin</a>
                <a class="btn btn-danger" href="<?= PATH . '/public/index.php?controller=user&action=logout' ?>">logout</a>
                <a href="<?= PATH . '/public/index.php?controller=user&action=profile' . '&id=' . $_SESSION['id'] ?>"
                    i class="navbar-text text-decoration-none">
                    <span class="ms-2">
                        <?= $_SESSION['username'] ?>
                    </span>

                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar" width="30" height="30"
                        class="rounded-circle" />
                </a>
            <?php else: ?>
                <a href="<?= PATH . '/public/index.php?controller=user&action=login' ?>" i
                    class="navbar-text text-decoration-none">
                    <span class="ms-2">Khach</span>

                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar" width="30" height="30"
                        class="rounded-circle" />
                </a>
            <?php endif; ?>



        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>