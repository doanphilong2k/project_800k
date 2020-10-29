<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" href="../../Assets//bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Assets//fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


    <!------------------------ Login -------------------------------->

    <div id="login-container"> 
        <img class="bookicon" src="../Image/book-icon1.png" alt="book icon">
        <form method="post" action="">
            <table>
                <tr>
                    <td><i class="fa fa-user"></i></td>
                    <td> <input type="text" placeholder="Tên đăng nhập" name="user" id="user"> </td>
                </tr>
                <tr>
                    <td><i class="fa fa-unlock"></i></td>
                    <td> <input type="password" placeholder="Mật khẩu" name="pass" id="pass"> </td>
                </tr>
                <tr>
                    <td colspan="2"> <button type="submit" name="submit" id="login">Đăng nhập</button> </td>
                </tr>
                <tr>
                    <td colspan="2" class="signup"> 
                        <p id="signup-btn"> Đăng ký </p> 
                        <p> Quên mật khẩu </p>
                    </td>
                </tr>
            </table>
        </form>

        <div id="login-intro">
            <div class="intro1">
                <i class="fa fa-lock"></i>
                <h5> ĐĂNG NHẬP VÀO HỆ THỐNG </h5>
            </div>
            <h2> Kiểm tra trực tuyến </h2>
        </div>
    </div>


    <!------------------------ Signup -------------------------------->

    <div id="signup-container">
        <img class="bookicon" src="../Image/book-icon1.png" alt="book icon">
        <h2> Đăng ký </h2>  
        <form method="post" action="">
            <table>
                <tr>
                    <td> <input type="text" name="ho" placeholder="Họ" id="fname"> </td>
                    <td> <input type="text" name="ten" placeholder="Tên" id="lname"> </td>
                </tr>
                <tr>
                    <td> 
                        <i class="fa fa-user"></i>
                        <input type="text" name="tk" placeholder="Tài khoản" id="account"> 
                    </td>
                    <td> 
                        <i class="fa fa-unlock sp-icon"></i>
                        <input type="password" name="mk" placeholder="Mật khẩu" id="password"> 
                    </td>
                </tr>
                <tr>
                    <td> 
                        <i class="fa fa-envelope sp-icon"></i>
                        <input type="text" name="email" placeholder="Địa chỉ Email" id="email"> 
                    </td>
                    <td> 
                        <select>
                            <option> Nam </option>
                            <option> Nữ </option>
                            <option> Khác </option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> 
                        <select class="position"> 
                            <option> Thí sinh </option>
                            <option> Giám khảo trông thi </option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> <button type="button" name="signup" id="signup"> Đăng ký </button></td>
                </tr>
            </table>
        </form>
        <button type="button" class="undo"> 
            <i class="fa fa-undo"></i>
            Quay lại 
        </button>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="../JS/login.js"></script>
    

</body>
</html>
