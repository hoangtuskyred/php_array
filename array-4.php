<?php
$sinhviens = [
    [
        "name" => "tu",
        "age" => "20",
        "weight" => "50",
        "height" => 165
    ],
    [
        "name" => "hoang",
        "age" => "21",
        "weight" => "65",
        "height" => 168,
    ],
    [
        "name" => "thong",
        "age" => "20",
        "weight" => "50",
        "height" => 165
    ],
    [
        "name" => "hieu",
        "age" => "22",
        "weight" => "55",
        "height" => 170,
    ],
    [
        "name" => "truong",
        "age" => "55",
        "weight" => "70",
        "height" => 175,
    ],
];

$results = array();
$age = $_POST['age'] :null;
$weight = $_POST['weight'] :null;
if (isset($age) && isset($weight)) {
   foreach ($sinhviens as $key => $sinhvien) {
       if ($age == $sinhvien['age'] && $weight == $sinhvien['weight']) {
           $results[] = $sinhvien;
       }
   }
   $sinhviens = $results;
}
if (isset($_POST["chon"])) {
    $list = [];
    switch ($_POST["chon"]) {
        case "name":
            echo "<p>Ten</p>";
            foreach ($sinhviens as $sinhvien) {
                array_push($list, $sinhvien["name"]);
            }
            break;

        case "age":
            echo "<p>Tuoi</p>";
            foreach ($sinhviens as $sinhvien) {
                array_push($list, $sinhvien["age"]);
            }
            break;

        case "weight":
            echo "<p>Can nang</p>";
            foreach ($sinhviens as $sinhvien) {
                array_push($list, $sinhvien["weight"]);
            }
            break;

        case "height":
            echo "<p>Chieu cao</p>";
            foreach ($sinhviens as $sinhvien) {
                array_push($list, $sinhvien["height"]);
            }
            break;

        default:
            echo "chon lai";
    }

    echo "<ol>";
    foreach ($list as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ol>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
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
<h2>Danh Sach tim Kiem</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>weight</th>
        <th>height</th>
    </tr>
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

<form action="" method="post">
    <select name="chon">
        <option value="name">Name</option>
        <option value="age">Age</option>
        <option value="weight">Weight</option>
        <option value="height">Height</option>
    </select>

    <input type="submit">
</form>
</body>
</html>