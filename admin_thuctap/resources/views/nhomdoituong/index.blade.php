@extends('thietlap')

@section('title', 'Nhóm Đối Tượng')

@section('main')

<section>
    <style>
        .header-index {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .search-wrapper {
            display: flex;
            flex: 1;
        }

        .search {
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
            color: rgb(0, 0, 0);

            max-width: 215px;
        }

        .search-bar {
            width: 200px;
            height: 30px;
            padding: 0 40px;
            font-size: 14px;
            border: 1px solid #C6CFFC;
            border-radius: 4px;
            background: #FFFFFF;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            pointer-events: none;
        }

        /* 
        .search-actions {
            display: flex;
            align-items: center;
            gap: 5px;
        } */

        .search-actions i {
            font-size: 16px;
            color: black;
            cursor: pointer;
        }

        .search-actions {
            padding: 5px 10px;
            border: none;
            width: 99px;
            height: 30px;
            background: #FFFFFF;
            color: rgb(0, 0, 0);
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #C6CFFC;

        }



        .create-btn-wrapper {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .create-btn {

            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 7px 8px;
            gap: 6px;

            width: 87px;
            height: 30px;
            color: #FFFFFF;
            background: #25406E;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.09);
            border-radius: 4px;

            flex: none;
            order: 10;
            flex-grow: 0;

        }

        .create-btn i {
            font-size: 16px;
        }


        table,
        th,
        td {
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;

        }

        th,
        td {

            background: #FFFFFF;
            padding: 15px 30px !important;

            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .group-client:hover td {
            background-color: #EAF0FE;
            color: rgb(0, 0, 0);
        }



        th {
            background: #FFFFFF;
        }

        .group-header {
            background: #FFFFFF;
            font-weight: bold;
        }

        .group-footer {
            font-style: italic;
            color: #555;
        }

        .filter-btn {
            border: 0;
            background: #FFFFFF;
        }

        .edit-icon {
            display: none !important;
            /* Mặc định ẩn */
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            color: #25406E;
            cursor: pointer;
        }

        .group-client {
            position: relative;
        }

        .group-client:hover .edit-icon {
            display: inline-block !important;
        }



        .edit-icon:hover {
            color: #007BFF;
        }
    </style>
    <div class="header-index">
        @section('header-actions')

        <div class="search-wrapper">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" placeholder="Tìm kiếm" class="search-bar">
            </div>
            <div class="search-actions">
                <i class="fas fa-border-all"></i>
                <button class="filter-btn">Bộ lọc</button>
                <i class="fas fa-chevron-down"></i>
            </div>



        </div>
        <div class="create-btn-wrapper">
            <button class="create-btn">
            <a href="{{ route('nhomdoituong.create') }}" class="create-link">
                <i class="fas-solid fa-plus"></i>
              Tạo mới</a>
            </button>
        </div>
    </div>


    <table>
        <thead>
            <tr>
                <th>Mã đối tượng</th>
                <th>Tên nhóm đối tượng</th>
                <th>Loại nhóm đối tượng</th>
            </tr>
        </thead>
        <tbody>
            <tr class="group-header">
                <td colspan="3">Nhóm đối tượng: Khách hàng</td>
            </tr>
            <tr class="group-client">
                <td>KV_HCM</td>
                <td>Khách hàng HCM</td>
                <td>
                    Khách hàng
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-client">
                <td>KV_HN</td>
                <td>Khách hàng Hà Nội</td>
                <td>
                    Khách hàng
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-client">
                <td>KV_DN</td>
                <td>Khách hàng Đà Nẵng</td>
                <td>
                    Khách hàng
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-client">
                <td>KV_DL</td>
                <td>Khách hàng Đà Lạt</td>
                <td>
                    Khách hàng
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-footer">
                <td colspan="3">Có 4 loại khách hàng</td>
            </tr>

            <tr class="group-header">
                <td colspan="3">Nhóm đối tượng: Nhân viên</td>
            </tr>
            <tr class="group-client">
                <td>NV_KHO</td>
                <td>Quản kho</td>
                <td>
                    Nhân viên
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-client">
                <td>NV_BH</td>
                <td>Bảo hành</td>
                <td>
                    Nhân viên
                    <i class="fa-solid fa-pen-to-square edit-icon"></i>
                </td>
            </tr>
            <tr class="group-footer">
                <td colspan="3">Có 2 loại nhân viên</td>
            </tr>
        </tbody>
    </table>

</section>

@endsection