<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>

<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
<form action="sucker.php" method="post">
<dl>
    <dt>Name</dt>
    <dd>
        <input type="text" name="name" placeholder="John Doe" required >

    </dd>

    <dt>Section</dt>
    <dd>
        <select name="section"  >
            <option value="MA">MA</option>
            <option value="MB">MB</option>
            <option value="MC">MC</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MF">MF</option>
            <option value="MG">MG</option>
            <option value="MH">MH</option>
        </select>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <input type="text" name="cardnum" maxlength="19" placeholder="1234 5678 9012 3456" required> <br>
        <input type="radio" id="visa" name="card" value="Visa" checked>
        <label for="visa">Visa</label>
        <input type="radio" id="mast" name="card" value="MasterCard" >
        <label for="mast">MasterCard</label><br>
    </dd>
</dl>

<div>
    <input type="submit" value="I am a giant sucker."/>

</div>
</form>
</body>
</html>