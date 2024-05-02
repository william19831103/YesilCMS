<?php
session_start();
require_once("lib/epay.config.php");
require_once("lib/EpayCore.class.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付返回页面</title>
	</head>
	<body>
<?php

function connect_db() {
    $host = 'localhost';
    $port = 3306; // 如果使用非默认端口号,请修改此处
    $user = 'root';
    $password = 'root';
    $database = 'cms';

    $conn = new mysqli($host, $user, $password, $database, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

//计算得出通知验证结果
$epay = new EpayCore($epay_config);
$verify_result = $epay->verifyReturn();


// 3分钟内不超过10次请求，否则封禁1小时
if (isset($_SESSION["reg_count"])) {
    $_SESSION["reg_count"]++;
} else {
    $_SESSION["reg_count"] = 1;
    $_SESSION["reg_time"] = time();
}

$reg_minutes = 180; // 3 minutes
$reg_ban_hours = 60*60 ; // 1 hour


// 如果已被封禁
if (isset($_SESSION["reg_banned"]) && $_SESSION["reg_banned"] === true) {
    // 检查是否已解禁
    if (time() - $_SESSION["reg_ban_time"] >= 0) {
        // 解禁
        unset($_SESSION["reg_ban_time"]);
        unset($_SESSION["reg_banned"]);
        $_SESSION["reg_count"] = 1;
    } else {
        // 仍在封禁期内，直接返回
        echo "您已被封禁1小时,请稍后再试。";
        return;
    }
}

// 检查请求次数是否超过10次
if ($_SESSION["reg_count"] > 10) {
    // 检查是否超过3分钟
    if (time() - $_SESSION["reg_time"] > $reg_minutes) {
        // 封禁1小时
        $_SESSION["reg_ban_time"] = time() + $reg_ban_hours;
        $_SESSION["reg_banned"] = true;
        $_SESSION["reg_count"] = 1;
        echo "您已被封禁1小时,请稍后再试。";
        return;
    }
}


if($verify_result) {//验证成功

    //商户订单号
    $out_trade_no = $_GET['out_trade_no'];

    //支付宝交易号
    $trade_no = $_GET['trade_no'];

    //交易状态
    $trade_status = $_GET['trade_status'];

    //支付方式
    $type = $_GET['type'];

    //用户名
    $username = $_GET['name'];

    //金额
    $money = $_GET['money'];


    if ($_GET['trade_status'] == 'TRADE_SUCCESS') {
        //这里进行连接数据库cms

        // 检查是否已经处理过该订单
        $conn = connect_db(); // 假设您已经定义了 connect_db() 函数来连接数据库
        $sql = "SELECT * FROM `cms`.`orders` WHERE `out_trade_no` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $out_trade_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // 订单已经处理过了,直接输出提示信息
            echo "账号: " . $username . " 赞助 " . $money . " 元已成功!";
        } else {
            // 更新数据库
            $sql = "UPDATE `cms`.`users` SET `dp` =`dp`+ ? WHERE `username` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $money, $username); // "si" 表示 $money 是字符串类型, $username 是整型
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // 记录订单信息,防止重复处理
                $sql = "INSERT INTO `cms`.`orders` (`out_trade_no`, `trade_no`, `trade_status`, `type`, `username`, `money`) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssd", $out_trade_no, $trade_no, $trade_status, $type, $username, $money);
                $stmt->execute();

                echo "账号: " . $username . " 赞助 " . $money . " 元已成功!";
            } else {
                echo "充值失败,请核对下是否填入正确的游戏账号名,请把截图发给联系老G. 订单号: " . $out_trade_no . ", 用户名: " . $username . ", 赞助失败: " . $money . ", 错误信息: " . $conn->error;
            }
        }

        $stmt->close();
        $conn->close();

        // 添加返回主页的链接或按钮
        echo "<br><a href='/'>返回主页</a>";
    }
    else {
        echo "trade_status=".$_GET['trade_status'];
    }

    echo "<h3>感谢您的赞助!,可以关闭此页面返回</h3><br />";
}
else {
    //验证失败
    echo "<h3>验证失败</h3>";
}
?>

	</body>
</html>