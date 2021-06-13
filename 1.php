<html>
<head><title>Random</title></head>
<body style=" black;color: red;">
<h2><p>Number generated randomly is  <?php
    $ch = rand(1, 100);
    echo $ch;
?>.</p><p> And its square root is <?php
    echo round(sqrt($ch),3);
?>.</p></h2>
</body>
</html>