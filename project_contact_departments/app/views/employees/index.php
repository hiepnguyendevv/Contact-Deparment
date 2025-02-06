<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?= ROOT . '/public/assets/css/style.css' ?>"> -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>Employees</title>
</head>

<body>
<?php
    // hiển thị các khoa và giới thiệu'
    include ROOT . '/app/views/navbar/index.php';

    // require_once ROOT.'app/controllers/DepartmentController.php';
    ?>
    <div class="product-list">
        <?php foreach ($currentPageItems as $employee): ?>
           
        <div class="product">
            <a style="text-decoration: none;" href="<?= PATH.'/public/index.php?controller=employee&action=detail&id='.$employee->getEmployeeId()?>"
               >
                <div>
                    <img class="pic" src="https://i.pinimg.com/236x/76/18/38/761838420398ec0b0b412b46b71f2ab2.jpg">
                </div>
                <div>
                    <p>Tên Nhân Viên:
                        <?php echo $employee->getFullName(); ?>
                    </p>
                    <p>SDT:
                        <?php echo $employee->getMobilePhone(); ?>
                    </p>
                    <p>Email:
                        <?php echo $employee->getEmail(); ?>
                    </p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="<?= PATH.'/public/index.php?controller=employee&action=getbyid&id='.$id.'&page='.$currentPage -1 ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
        <span class="active">
            <?php echo $i; ?>
        </span>
        <?php else: ?>
        <a href="<?= PATH.'/public/index.php?controller=employee&action=getbyid&id='.$id.'&page='.$i ?>">
            <?php echo $i; ?>
        </a>
        <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
        <a href="<?= PATH.'/public/index.php?controller=employee&action=getbyid&id='.$id.'&page='.$currentPage +1 ?>">Next</a>
        <?php endif; ?>
    </div>
    <footer>
        <?php
        // hiển thị các khoa và giới thiệu'
        include ROOT . '/app/views/footer/index.php';

        // require_once ROOT.'app/controllers/DepartmentController.php';
        ?>
    </footer>
</body>

</html>