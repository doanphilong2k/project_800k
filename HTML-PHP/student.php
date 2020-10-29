<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/fontawesome-free-5.14.0-web/css/all.css">
    <!-- <link rel="stylesheet" href="../Assets/bootstrap-4.5.2-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css">

</head>

<body>
    <div id="header">
        <img src="../Image/book-icon1.png" alt="book icon">
        <p> Trang chủ</p>
        <button type="button"><i class="fas fa-align-justify"></i></button>
    </div>

    <div id="right-sidebar">
        <table class="right-sidebar-info">
            <tr>
                <td colspan="3"><p> Thông tin tài khoản </p></td>
            </tr>
            <tr>
                <td class="sideicon"><i class="fas fa-clipboard-check"></i></td>
                <td>Họ và tên:</td>
                <td> Đoàn Phi Long </td>
            </tr>
            <tr>
                <td><i class="fas fa-user-circle"></i></td>
                <td>Tài khoản:</td>
                <td> doanphilong2k </td>
            </tr>
            <tr>
                <td><i class="fas fa-tag"></i></td>
                <td>Mã thí sinh:</td>
                <td> 105 </td>
            </tr>
        </table>

        <div id="right-sidebar-button">
            <table class="right-sidebar-btn">
                <tr>
                    <td><button type="button" class="content-title" onclick="currentButton(1)"> Vào thi </button></td>
                    <td><button type="button" class="content-title" onclick="currentButton(2)"> Thông tin cá nhân </button></td>
                </tr>
                <tr>
                    <td><button type="button" class="content-title" onclick="currentButton(3)"> Lịch sử </button></td>
                    <td><button type="button"> Thoát </button></td>
                </tr>
            </table>        
        </div>

    </div>

    <div id="left-container">
        <div class="content">
            <div class="l-c-title"> Tham gia kiểm tra </div>
            <div>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>
                                Nhập mã phòng thi <input type="text" name="room" id="test-room">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit-room" id="test-room-btn"> Xác nhận </button>
                            </td>
                        </tr>
                    </table>
                </form>
                <h4> Thí sinh điền mã phòng thi yêu cầu, thực hiện đúng nội quy khi tham gia quá trình kiểm tra theo thời gian quy định </h4>
            </div>
        </div>

        <div class="content">
            <div class="l-c-title"> Thông tin cá nhân </div>
            <div class="l-c-info">
                <table>
                    <tr>
                        <td> Tài khoản: </td>
                        <td> doanphilong2k </td>
                    </tr>
                    <tr>
                        <td> Họ và tên: </td>
                        <td> Đoàn Phi Long </td>
                    </tr>
                    <tr>
                        <td> Giới tính: </td>
                        <td> Nam </td>
                    </tr>
                    <tr>
                        <td> Mã thí sinh: </td>
                        <td> 105 </td>
                    </tr>
                </table>
                
                <table>
                    <tr>
                        <td> Trạng thái: </td>
                        <td> Thí sinh </td>
                    </tr>
                    <tr>
                        <td> Điểm trung bình:</td>
                        <td> 10 </td>
                    </tr>
                    <tr>
                        <td> Xếp loại </td>
                        <td> Giỏi </td>
                    </tr>
                    <tr>
                        <td>Cho vào đỡ trống:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="l-c-parameter">
                <div>
                    <h3> Số lần thi </h3>
                    <p> <i class="fas fa-edit"></i> 2 </p>
                </div>
                <div>
                    <h3> Số lần qua </h3>
                    <p> <i class="fas fa-check"></i> 2 </p>
                </div>
                <div>
                    <h3> Số lần trượt </h3>
                    <p> <i class="fas fa-times"></i> 0 </p>
                </div>
                <div>
                    <h3> Phạm lỗi </h3>
                    <p> <i class="fas fa-exclamation-circle"></i> 0 </p>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="l-c-title"> Lịch sử </div>
            <div class="l-c-history">
                <div>
                    <table>
                        <tr>
                            <th> STT </th>
                            <th> Mã phòng </th>
                            <th> Bài thi </th>
                            <th> Thời gian </th>
                            <th> Điểm </th>
                            <th> Cài đặt </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="../Assets/bootstrap-4.5.2-dist/js/bootstrap.js"></script> -->
    <script src="../JS/profile.js"></script>
</body>
</html>