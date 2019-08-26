<!--Tạo ra một mảng đa chiều có các trường name, age, weight, height.-->
<?php
$sinhviens = [
    [
        "name" => "Tu",
        "age" => 20,
        "weight" => 50,// đơn vị tinh kg
        "height" => 165 // đơn vị tinh cm

    ],
    [
        "name" => "Thông",
        "age" => 21,// đơn vị tinh kg
        "weight" => 55,
        "height" => 170// đơn vị tinh cm

    ],
    [
        "name" => "Hoang",
        "age" => 22,
        "weight" => 55,// đơn vị tinh kg
        "height" => 175// đơn vị tinh cm

    ],
    [
        "name" => "Truong",
        "age" => 21,
        "weight" => 60,// đơn vị tinh kg
        "height" => 160// đơn vị tinh cm

    ],
    [
        "name" => "Hieu",
        "age" => 23,
        "weight" => 55,// đơn vị tinh kg
        "height" => 175// đơn vị tinh cm

    ],
];
//kiểm tra xem $_POST ["search"] có tồn tại hay không
//em lôi $_POST ["search"] dể ra một biến khac nhưng chuong trình chạy nhưng báo lỗi ở dòng đó luôn anh sửa lại giúp em với ạ
if (isset($_POST["search"])) {
    $search = $_POST ["search"];
    $arr = [];
    foreach ($sinhviens as $sinhvien) {
        foreach ($sinhvien as $value) {
            if ($search == $value) {
                array_push($arr, $sinhvien);
            }
        }
        $sinhviens = $arr;
    }
}
// tính trung bình của các trường age, weight, height
$tba = 0;
$tbw = 0;
$tbh = 0;
foreach ($sinhviens as $sinhvien) {
    $tba += $sinhvien["age"];
    $tbw += $sinhvien["weight"];
    $tbh += $sinhvien["height"];
}
$tbage = $tba / count($sinhviens);
$tbweight = $tbw / count($sinhviens);
$tbheight = $tbh / count($sinhviens);
echo "Trung binh Tuoi: " . $tbage . "<br>";
echo "Trung binh can nang: " . $tbweight . "<br>";
echo "Trung binh chieu cao: " . $tbweight;

?>


<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
<!--    Css copy ở link: https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table_intro -->
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<!--Tạo một form có method là POST để người dùng có thể tìm kiếm theo tất cả giá trị của mảng-->
<h2>Bảng Tìm Kiếm</h2>
<form action="" method="post">
    <input type="text" name="search">
    <input type="submit">
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Height</th>
        </tr>
<!--        Chạy vòng lặp foreach để in ra các giá trị của mảng -->
        <?php
        foreach ($sinhviens as $sinhvien) {
            echo "<tr>";
            echo "<td>" . $sinhvien["name"] . "</td>";
            echo "<td>" . $sinhvien["age"] . "</td>";
            echo "<td>" . $sinhvien["weight"] . "</td>";
            echo "<td>" . $sinhvien["height"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>
</body>
</html>