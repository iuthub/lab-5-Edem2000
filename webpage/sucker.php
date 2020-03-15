<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>You are sucker!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<?php
$name = $_REQUEST["name"];
$cardnum = $_REQUEST["cardnum"];

$namePattern = "/([A-Z][a-z]+.[A-Z][a-z]+)/";
$cardnumPattern = "/(([0-9]{4}.){3}[0-9]{4})/";
if(!preg_match($namePattern, $name) || !preg_match($cardnumPattern, $cardnum)) {
    header("Location: doublesucker.php", TRUE, 301);
    die();
}
?>
<body>
<h1>Thanks, Sucker!</h1>
<hr />

<dl>
    <dt>Your Name is:</dt>
    <dd>
        <?= $_REQUEST["name"] ?>
    </dd>

    <dt>Your Section is:</dt>
    <dd>
        <?= $_REQUEST["section"] ?>
    </dd>

    <dt>Your Credit Card is:</dt>
    <dd>
        <?= $_REQUEST["cardnum"] ?> (<?= $_REQUEST["card"] ?>)
    </dd>
</dl>
<?php
$data_to_put = $_REQUEST["name"] .", " . $_REQUEST["section"] .", " . $_REQUEST["cardnum"] .", " . ($_REQUEST["card"] ."\n" );
file_put_contents("sucker.txt", $data_to_put, FILE_APPEND);
?>
<div>
    <h2>Other suckers like you are:</h2>
    <pre><?= file_get_contents("sucker.txt")?></pre>
</div>
<div>
    <form action="buyagrade.php">
    <input type="submit" value="Suck Again."/>
    </form>
</div>
</body>
</html>