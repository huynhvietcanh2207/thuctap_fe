<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiết lập giao diện</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-Kfw7axKCr1SgfRZoMJ6vYJpNBoK9lMnKavWjIvj+ybnDmcTjOsIQ9MWMK2Y6ZTj3E1TRKiUZoYqrcTp5OV92vw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">THIEN PHAT TIEN</div>
            <div class="menu">
                <span class="menu-item active">THIẾT LẬP</span>
                <span class="menu-item">NGHIỆP VỤ</span>
                <span class="menu-item">BÁO CÁO</span>
            </div>
            <div class="user-options">
            <span class="bell-icon"><i class="fa-regular fa-bell"></i></span>
            <span class="user-icon">👤</span>
            </div>
        </div>
        
        <div class="tabs">
            <button class="tab active">Nhóm đối tượng</button>
            <button class="tab">Khách hàng</button>
            <button class="tab">Nhà cung cấp</button>
            <button class="tab">Hàng hóa</button>
            <button class="tab">Nhân viên</button>
            <button class="tab">Kho</button>
        </div>
        
        <div class="main-content"></div>
        
        <div class="items-header">
            <button class="cancel-btn">Huỷ</button>
            <button class="confirm-btn">Xác nhận</button>
        </div>
    </div>
</body>
</html>
