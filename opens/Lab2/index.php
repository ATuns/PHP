<!DOCTYPE html>
<html>

<head>
    <title>PHP Object Oriented Programming</title>
    <!-- Unicode Vietnamese -->
    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />
    <!-- css definition file -->
    <link href="../lap1/style.css" rel="stylesheet" />

    <style>
        .outer-box-border {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 20px; /* Thêm margin-bottom để tạo khoảng cách giữa các phần */
            display: inline-block; /* Hiển thị thành phần dưới dạng block trên cùng một dòng */
        }

        .inner-box-border {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 20px; /* Thêm margin-bottom để tạo khoảng cách giữa các phần */
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <div class="outer-box-border"> <!-- Bắt đầu thẻ div có class là 'outer-box-border' -->
            <?php
            require_once("member.php");
                    require_once("staff.php");

                    $sv = new member("Nguyen Van A", "email1@gmail.com");
                    echo "<h2>-- Member information --</h2>";
                    echo "Code: " . $sv->get_id() . "<br/>";
                    echo "Fullname: " . $sv->get_fullname() . "<br/>";
                    echo "Email: " . $sv->get_email() . "<br/>";

                    $sv2 = new member("Tran Van B", "email2@gmail.com");
                    echo "<h2>---More information--</h2>";
                    echo "Code: " . $sv2->get_id() . "<br/>";
                    echo "Fullname: " . $sv2->get_fullname() . "<br/>";
                    echo "Email: " . $sv2->get_email() . "<br/>";

                    $nhanvat = new character("Nguyen Van A", 5678);
                    $staff = new Staff("Nguyen Van B", 1234, "Guard");
                    ?>
                <div class="inner-box-border"> <!-- Bắt đầu thẻ div có class là 'inner-box-border' -->
                    <?php
                    require_once("member.php");
                    require_once("staff.php");

                   
                    echo "<div>"; // Bắt đầu thẻ div
                    echo "<h2>--- Add: Object Oriented PHP --</h2>";
                    echo "Full name: " . $nhanvat->get_fullname() . "<br/>";
                    echo "Country code: " . $nhanvat->get_countrycode() . "<br/>";

                    echo "<h2>---Staff--</h2>";
                    echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
                    echo "Họ tên: " . $staff->get_fullname() . "<br/>";
                    echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
                    echo "Bộ phận: " . $staff->get_part() . "<br/>";
                    echo "<footer>"; // Bắt đầu thẻ footer
                    echo "<p>Trendemy: <a href='trendemy.com'>trendemy@gmail.com</a>.</p>";
                    echo "</footer>"; // Kết thúc thẻ footer
                    echo "</div>"; // Kết thúc thẻ div
                    ?>
                </div> <!-- Kết thúc thẻ div có class là 'inner-box-border' -->
            
            </div> <!-- Kết thúc thẻ div có class là 'outer-box-border' -->
        </div>
    </div>
</body>

</html>
