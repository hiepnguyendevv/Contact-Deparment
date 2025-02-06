<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trang cá nhân</title>
</head>

<body>
    <div class="page-content">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="<?= $employee->getAvatar();?>"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image w-50 h-50"
                                        alt="user-profile-image">
                                </div>
                                <h5 class="fs-16 mb-1"><?= $employee->getFullName() ?></h5>
                                <h5 class="fs-16 "><?= $employee->getMobilePhone() ?></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i>
                                        Thông tin cá nhân </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                        <i class="far fa-user"></i>
                                        Thay đổi mật khẩu </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="<?= PATH.'/public/index.php?controller=user&action=profile&id='.$_GET['id']?>"  method="post">
                                        <div class="row">
                                                             
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Họ tên</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" value="<?= $employee->getFullName() ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3 pb-2">
                                                    <label for="exampleFormControlTextarea" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="address" value="<?= $employee->getAddress() ?>" placeholder="Nhập địa chỉ " >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Thư điện tử</label>
                                                    <input type="text" class="form-control" name="email" value="<?= $employee->getEmail() ?>" placeholder="exam@gmail.com" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" name="phone" value="<?= $employee->getMobilePhone() ?>"  placeholder = "Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Công việc</label>
                                                    <input type="text" class="form-control" name="position" value="<?= $employee->getPosition() ?>" placeholder ="Công việc"value="" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Ảnh</label>
                                                    <input type="text" class="form-control" name="avatar" value="" placeholder ="abc.img" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">ID đơn vị</label>
                                                    <input type="text" class="form-control" name="departmentId" value="" placeholder ="ID đơn vị">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" id="btnSaveProfile"
                                                        class="btn btn-primary" name="update">Cập Nhật</button>
                                                        <a href="<?= PATH.'/public/index.php?controller=department&action=index'?>" class="btn btn-danger">Thoát</a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                    </form>
                                </div>
                                
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <form action="javascript:void(0);">
                                        <div class="row g-2">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Mật khẩu hiện
                                                        tại*</label>
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Nhập mật khẩu hiện tại">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label">Mật khẩu
                                                        mới*</label>
                                                    <input type="password" class="form-control" id="newpassword"
                                                        placeholder="Nhập mật khẩu mới">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="confirmpasswordInput" class="form-label">Nhập lại mật
                                                        khẩu mới*</label>
                                                    <input type="password" class="form-control" id="renewpassword"
                                                        placeholder="Nhập lại mật khẩu mới">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <a href="javascript:void(0);"class="link-primary text-decoration-underline" style = "text-decoration: none;">Quên mật khẩu?</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="button" id="btnChangePasswordProfile"
                                                        class="btn btn-success">Lưu Thay Đổi</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane">
                                    <div class="table-responsive p-0">
                                        <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">

                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane">
                                        <div class="table-responsive p-0">
                                            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">

                                                    </div>
                                                    <div class="col-sm-12 col-md-6">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    </div>
                                                </div>
                                                <!--end tab-pane-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        crossorigin="anonymous">
                        </script>
</body>

</html>