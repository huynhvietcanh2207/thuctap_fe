<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="thietlap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="{{ route('thietlap.index') }}"> 
                    <img src="{{ asset('img/logo.png')}}" alt="Logo" height="20" />
                </a>

            </div>

            <div class="menu">
                <span class="menu-item active"><a href="{{ route('thietlap.index') }}">THIẾT LẬP</a></span>
                <span class="menu-item"><a href="{{ route('nghiepvu.index') }}">NGHIỆP VỤ</a></span>
                <span class="menu-item"><a href="{{ route('baocao.index') }}">BÁO CÁO</a></span>
            </div>
            <div class="user-options">
                <div class="notification-icon">
                    <i class="fas fa-bell light-icon"></i>
                    <span class="badge">3</span>
                </div>

                <div class="user-icon">
                    <i class="fas fa-user-circle light-icon"></i>
                </div>
            </div>
        </div>

        <div class="tabs">
            <button class="tab active"><a href="{{ route('nhomdoituong.index') }}"><span class="sub-item">Nhóm đối tượng</span></a></button>
            <button class="tab">Khách hàng</button>
            <button class="tab">Nhà cung cấp</button>
            <button class="tab">Hàng hóa</button>
            <button class="tab">Nhân viên</button>
            <button class="tab">Kho</button>
        </div>
        <div class="items-header">
            <!-- <button class="cancel-btn">
                <i class="fa-solid fa-circle-xmark"></i> Hủy
            </button>
            <button class="confirm-btn">
                <i class="fa-solid fa-circle-check"></i> Xác Nhận
            </button>
             -->
            @yield('header-actions')
        </div>

        <div class="main-content">
            @yield('main')
        </div>


    </div>
</body>

</html>