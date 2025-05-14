<?php
if (isset($_POST['submitMass']) || isset($_POST['submitSpeed']) || isset($_POST['submitTemp'])) {
    $conversion = $_POST['category'];
    switch ($conversion) {
        case "CtoFhr":
            $result = (9 * $_POST['temp'] + 160) / 5;
            $unit = "°F";
            break;
        case "CtoK":
            $result = ($_POST['temp'] + 273.15);
            $unit = "°K";
            break;
        case "KtoM":
            $result = ($_POST['speed'] * 5 / 18);
            $unit = " m/s";
            break;
        case "KtoKnot":
            $result = ($_POST['speed'] * 0.539957);
            $unit = " Knots";
            break;
        case "KtoG":
            $result = ($_POST['mass'] * 1000);
            $unit = " g";
            break;
        case "GtoK":
            $result = ($_POST['mass'] / 1000);
            $unit = " kg";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>This is the measurement Conversion in PHP</h1>
    <h2>Input your value and chose desired conversion</h2>
    <div class="box">
        <h3>Temperature Conversion here</h3>
        <form action="index.php" method="POST">
            <input type="text" name="temp" id="">
            <select name="category" id="">
                <option value="CtoFhr">Celcius to Fahrenheit</option>
                <option value="CtoK">Celcius to Kelvin</option>
            </select>
            <button name="submitTemp" onclick=handleClick(event)>Convert</button>
        </form>
        <p class='result'><?php echo (isset($conversion) && ($conversion == "CtoFhr" || $conversion == "CtoK")) ? "Result is : " . ($result . $unit) : ("") ?></p>
    </div>
    <div class=" box">
        <h3>Speed Conversion here</h3>
        <form action="" method="POST">
            <input type="text" name="speed" id="">
            <select name="category" id="">
                <option value="KtoM">Kilometres per Hour to Meters per second</option>
                <option value="KtoKnot">Kilometres per hour to Knots</option>
            </select>
            <button name="submitSpeed" onclick="handleClick()">Convert</button>
        </form>
        <p class='result'><?php echo (isset($conversion) && ($conversion == "KtoM" || $conversion == "KtoKnot")) ? "Result is : " . ($result . $unit) : ("") ?></p>

    </div>
    <div class="box">
        <h3>Mass Conversion here</h3>
        <form action="" method="POST">
            <input type="text" name="mass" id="">
            <select name="category" id="">
                <option value="KtoG">Kilogram to Grams</option>
                <option value="GtoK">Grams to Kilogram</option>
            </select>
            <button name="submitMass" onclick="handleClick()">Convert</button>
        </form>
        <p class='result'><?php echo (isset($conversion) && ($conversion == "KtoG" || $conversion == "GtoK")) ? "Result is : " . ($result . $unit) : ("") ?></p>

    </div>
    <script>
        function handleClick(e) {
            // e.preventDefault();
            console.log(' form submitteds');
        }
    </script>

</body>

</html>