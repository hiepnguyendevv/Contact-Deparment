<?php
session_start();
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($employees) / $itemsPerPage);
$currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<script>
const doDelete = () => {
  const message = confirm("Bạn có muốn xóa không?");
  if (message) {
    window.location.href = 'index.'
  } else {
    $check = false;
  }
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">

  <title></title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border border-danger">
      <div class="container-fluid">
        <a class="navbar-brand t" href="#">Danh bạ điện tử</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?= PATH.'/public/index.php?controller=department&action=index' ?> ">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= PATH.'/public/index.php?controller=employee&action=index' ?> ">Danh bạ người dùng</a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Danh bạ phòng ban</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <form class="d-flex " role="search" action="<?= PATH.'/public/index.php?controller=employee&action=adminSearch' ?>" method="post">
              <input class="form-control me-2" name="name" type="search" placeholder="Tìm kiếm" aria-label="Search">
              <button class="btn btn-outline-success" name="search" type="submit">search</button>
            </form>
          </ul>
        </div>
        <div>
          <a href="#" class="text-decoration-none text-success">Tài khoản quản trị</a>
          <a href="<?= PATH . '/public/index.php?controller=user&action=logout' ?>" class="btn btn-danger">Thoát</a>
        </div>
      </div>
    </nav>
  </header>
  <?php if(isset($_GET['error'])):?>
  <div class="alert alert-danger" role="alert">
    <?php echo $_GET['error'];?>
  </div>
  <?php endif;?>
  <?php if(isset($_GET['msg'])):?>
  <div class="alert alert-success" role="alert">
    <?php echo $_GET['msg'];?>
  </div>
  <?php endif;?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center text-danger my-3">DANH BẠ NGƯỜI DÙNG</h1>
          <a href="<?= PATH . '/public/index.php?controller=employee&action=create'?>" class="btn btn-primary">Thêm tài
            khoản</a>
          <table class="table border border-danger my-2">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Đơn vị</th>
                <th scope="col" colspan="3" class="text-center">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($currentPageItems as $employe): ?>
              <tr>
                <th scope="row">
                  <?= $i++ ?>
                </th>
                <td>
                  <?= $employe->getFullName(); ?>
                </td>
                <td>
                  <?= $employe->getMobilePhone(); ?>
                </td>
                <td>
                  <?= $employe->getAddress(); ?>
                </td>
                <td>
                  <?= $employe->getDepartmentId(); ?>
                </td>
                <th scope="col">
                  <a href="" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                </th>
                <th scope="col">
                  <a href="<?=PATH.'/public/index.php?controller=employee&action=update&id='.$employe->getEmployeeId() ?>"
                    class="btn btn-danger"><i class="bi bi-pencil-fill"></i></a>
                </th>
                <th scope="col">
                  <a onclick="return confirm('Are you sure?')"
                    href="<?=PATH.'/public/index.php?controller=employee&action=delete&id='.$employe->getEmployeeId() ?>"
                    class="btn btn-warning"><i class="bi bi-trash-fill"></i></a>
                </th>
                <!-- <th scope="col">
                                    <a href="" class = "btn btn-info"><i class="bi bi-key-fill"></i></a>
                                </th> -->
              </tr>
              <?php endforeach; ?>

          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <div class="pagination">
                <?php if ($currentPage > 1): ?>
                <li class="page-item"><a class="page-link"
                    href="<?= PATH.'/public/index.php?controller=employee&action=index&page='.$currentPage -1; ?>">&laquo;</a>
                </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $currentPage): ?>
                <li class="page-item">
                  <span class="active">
                    <a class="page-link" href=""> <?php echo $i; ?></a>
                   
                  </span>
                </li>  
                  <?php else: ?>
                  <a class="page-link"
                    href="<?= PATH.'/public/index.php?controller=employee&action=index&page='.$i; ?>">
                    <?php echo $i; ?>
                  </a>
                  <?php endif; ?>
                  <?php endfor; ?>
                  <?php if ($currentPage < $totalPages): ?>
                  <a class="page-link"
                    href="<?= PATH.'/public/index.php?controller=employee&action=index&page='.$currentPage +1; ?>">&raquo;</a>
                  <?php endif; ?>
              </div>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>