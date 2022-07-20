<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: solid 1px #ccc;
        }

        form {
            width: 450px;
        }
    </style>
</head>
<body>
<?php

function loadRegistrations($fileName)
{
    $jsonData = file_get_contents($fileName);
    return json_decode($jsonData, true);
}

function saveDataJSON($fileName, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        // converts json data into array
        $arrData = loadRegistrations($fileName);
        // Push user data to array
        array_push($arrData, $contact);
        // Convert updated array to JSON
        $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
        // write json data into data.json file
        file_put_contents($fileName, $jsonData);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}

$nameErr = null;
$emailErr = null;
$phoneErr = null;
$name = null;
$email = null;
$phone = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $hasError = false;

    if (empty($name)) {
        $nameErr = "Tên đăng nhập không được để trống!";
        $hasError = true;
    }

    if (empty($email)) {
        $emailErr = "Email không được để trống!";
        $hasError = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $hasError = true;
        }
    }

    if (empty($phone)) {
        $phoneErr = " Số điện thoại không được để trống!";
        $hasError = true;
    }

    if (!$hasError) {
        saveDataJSON("data.json", $name, $email, $phone);
        $name = null;
        $email = null;
        $phone = null;
    }
}

?>

<h2>Registration Form</h2>
<form method="post">
    <fieldset>
        <legend>Details</legend>
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span class="error">*<?php echo $phoneErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Register">
        <p><span class="error">* required field.</span></p>
    </fieldset>
</form>

<?php
$registrations = loadRegistrations('data.json');
?>
<h2>Registration list</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($registrations as $registration): ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>