<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <form action="answer.php" method="POST">
        <label>
            <input type="number" name="num1">
        </label>
        <br>
        <div id="select">
            <label for="inputGroupSelect02">Operation</label>
            <select name="func" class="custom-select" id="inputGroupSelect02" style="max-width: 172px;">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
        </div>
        <label>
            <input type="number" name="num2">
        </label>
        <input type="submit" class="btn btn-primary" name="submit" value="Calculate!">
    </form>
</body>

</html>