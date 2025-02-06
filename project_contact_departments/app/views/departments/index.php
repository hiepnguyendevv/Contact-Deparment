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
                                    <img src="https://tanglikegiare.club/assets/img/icon-avatar.png"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image w-50 h-50"
                                        alt="user-profile-image">
                                </div>
                                <h5 class="fs-16 mb-1">duong28</h5>
                                <h5 class="fs-16 ">01234534563</h5>

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

                                    
                                    <h4 class="text-center">THÔNG TIN ĐƠN VỊ </h4>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">ID đơn vị</label>
                                                    <input type="text" class="form-control" id="fullname"placeholder="Nhập ID" value="">
                                                </div>
                                            </div>                               
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Tên đơn vị</label>
                                                    <input type="text" class="form-control" id="phonenumberInput" placeholder="Nhập họ tên" value="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3 pb-2">
                                                    <label for="exampleFormControlTextarea" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" value="" placeholder="Nhập địa chỉ " >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Thư điện tử</label>
                                                    <input type="text" class="form-control" value="" placeholder="exam@gmail.com" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" value=""  placeholder = "Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Logo</label>
                                                    <input type="email" class="form-control" placeholder ="Logo"value="" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Website</label>
                                                    <input type="text" class="form-control" value="" placeholder ="Website" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">ID đơn vị con</label>
                                                    <input type="text" class="form-control" value="" placeholder ="Đơn vị con" >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" id="btnSaveProfile"
                                                        class="btn btn-primary">Cập Nhật</button>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                    </form>
                                </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        crossorigin="anonymous">
                        </script>
</body>

</html>



