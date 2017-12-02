<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="index.php" method="post">
        <table border=2>
            <tr>
                <th>login id</th>
                <th>password</th>
            </tr>
            <tr>
                <td><input type="text" name="login_id"></td>
                <td><input type="text" name="login_password"></td>
            </tr>
        </table>
        <font color="red"><?php if ($_GET['error_message'] === 'login id_password') {
            $error_message = $_GET['error_message'];
            $new_error_message = str_replace('_', 'と', $error_message); // str_replace使ってみたかった
            echo $new_error_message . 'が一致していません';
        }
        ?></font>

        <input type="submit" value="ログイン">
    </form>
</body>
</html>
