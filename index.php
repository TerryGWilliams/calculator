<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <main>
        <h2>Simple calculator</h2>
        <form action="calculate.php" method="post">
            Number1: <input type="number" name="number1" required>
            Number2: <input type="number" name="number2" required>
            <select name="operator" required>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
                <option value="mod">Modulus</option>
                <option value="exp">Exponent</option>
            </select>
            <h3>Squaroot</h3>
            <input type="radio" name="operator" value="sqrt">Square root
            <h3>Logarithm</h3>
            <input type="radio" name="operator" value="log">Logarithm
            <input type="submit" name="submit" value="Calculate">
            <input type="reset" name="reset" value="Clear">
        </form>
    </main>
</body>
</html>