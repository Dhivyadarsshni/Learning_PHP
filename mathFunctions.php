<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math Utility Tool</title>
</head>
<body>
    <h2>🔢 PHP Math Utility Tool</h2>

    <form method="post">
        <label>Enter a number:</label><br>
        <input type="number" step="any" name="num1" required><br><br>

        <label>Enter second number (if needed):</label><br>
        <input type="number" step="any" name="num2"><br><br>

        <label>Select Math Operation:</label><br>
        <select name="operation" required>
            <option value="abs">Absolute</option>
            <option value="ceil">Ceil</option>
            <option value="floor">Floor</option>
            <option value="round">Round</option>
            <option value="sqrt">Square Root</option>
            <option value="pow">Power (num1^num2)</option>
            <option value="max">Max (between num1 and num2)</option>
            <option value="min">Min (between num1 and num2)</option>
            <option value="rand">Random (0 to num1)</option>
            <option value="mt_rand">Better Random (0 to num1)</option>
            <option value="pi">PI</option>
            <option value="sin">Sin</option>
            <option value="cos">Cos</option>
            <option value="tan">Tan</option>
            <option value="log">Logarithm</option>
            <option value="exp">Exponential (e^num1)</option>
            <option value="deg2rad">Degrees to Radians</option>
            <option value="rad2deg">Radians to Degrees</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <br><hr><br>

    <?php
    if (isset($_POST["calculate"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["operation"];
        $result = "";

        switch ($op) {
            case "abs":
                $result = abs($num1);
                break;
            case "ceil":
                $result = ceil($num1);
                break;
            case "floor":
                $result = floor($num1);
                break;
            case "round":
                $result = round($num1);
                break;
            case "sqrt":
                $result = sqrt($num1);
                break;
            case "pow":
                $result = pow($num1, $num2);
                break;
            case "max":
                $result = max($num1, $num2);
                break;
            case "min":
                $result = min($num1, $num2);
                break;
            case "rand":
                $result = rand(0, $num1);
                break;
            case "mt_rand":
                $result = mt_rand(0, $num1);
                break;
            case "pi":
                $result = pi();
                break;
            case "sin":
                $result = sin($num1);
                break;
            case "cos":
                $result = cos($num1);
                break;
            case "tan":
                $result = tan($num1);
                break;
            case "log":
                $result = log($num1);
                break;
            case "exp":
                $result = exp($num1);
                break;
            case "deg2rad":
                $result = deg2rad($num1);
                break;
            case "rad2deg":
                $result = rad2deg($num1);
                break;
            default:
                $result = "Invalid operation selected!";
        }

        echo "<h3>Result 📈: $result</h3>";
    }
    ?>
</body>
</html>
