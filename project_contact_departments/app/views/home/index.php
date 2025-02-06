<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href='../public/assets/css/styleHome.css'>
    <title>Home Page</title>


</head>

<body>
    <?php
    // hiển thị các khoa và giới thiệu'
    include ROOT . '/app/views/navbar/index.php';

    // require_once ROOT.'app/controllers/DepartmentController.php';
    ?>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-3 py-3 px-3 m-0">
            <!-- động -->
            <?php foreach ($departments as $department): ?>

            <div class="col">
                <a href="<?= PATH.'/public/index.php?controller=employee&action=getbyid&id='.$department->getDepartmentId()?>" class="text-decoration-none">
                    <div class="card text-center">
                        <img src="https://adtimin.vn/wp-content/uploads/2017/09/Logo-1.jpg" class="card-img-top"
                            alt="image" />
                        <div class="card-body">
                            <h5>
                                <p class="card-title">
                                    <?= $department->getDepartmentName() ?>
                                </p>
                                <p class="card-text">
                                    <?= $department->getEmail() ?>
                                </p>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>

        </div>
    </div>
    </div>



    <footer>
        <?php
        // hiển thị các khoa và giới thiệu'
        include ROOT . '/app/views/footer/index.php';

        // require_once ROOT.'app/controllers/DepartmentController.php';
        ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>