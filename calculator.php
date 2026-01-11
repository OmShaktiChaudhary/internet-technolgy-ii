<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
        <button class="clear" onclick="clearDisplay()">C</button>
        <button onclick="appendValue('/')">÷</button>
        <button onclick="appendValue('*')">×</button>
        <button onclick="appendValue('-')">-</button>

        <button onclick="appendValue('7')">7</button>
        <button onclick="appendValue('8')">8</button>
        <button onclick="appendValue('9')">9</button>
        <button class="operator" onclick="appendValue('+')">+</button>

        <button onclick="appendValue('4')">4</button>
        <button onclick="appendValue('5')">5</button>
        <button onclick="appendValue('6')">6</button>
        <button onclick="calculateResult()">=</button>

        <button onclick="appendValue('1')">1</button>
        <button onclick="appendValue('2')">2</button>
        <button onclick="appendValue('3')">3</button>
        <button onclick="appendValue('0')" style="grid-column: span 2;">0</button>
        <button onclick="appendValue('.')">.</button>
    </div>
</div>

<script>
    let display = document.getElementById("display");

    function appendValue(value) {
        if (display.innerText === "0" && value !== ".") {
            display.innerText = value;
        } else {
            display.innerText += value;
        }
    }

    function clearDisplay() {
        display.innerText = "0";
    }

    function calculateResult() {
        try {
            let result = eval(display.innerText);
            display.innerText = result;
        } catch (error) {
            display.innerText = "Error";
        }
    }
</script>

</body>
</html>