<?php
    $result = "";
    function getOperator($operator, $firstVal, $secondVal)
    {
        switch($operator)
        {
            case 'add':
                return $firstVal + $secondVal;
                break;
            case 'mul':
                return $firstVal * $secondVal;
                break;
            case 'div':
                return $firstVal / $secondVal;
                break;
            case 'sub':
                return $firstVal - $secondVal;
                break;
            default:
                return "Please select an operator";
        }
    }

    if(isset($_POST['btnSbmit']))
    {
        $firstValue = $_POST['firstVal'];
        $secondValue = $_POST['secondVal'];
        $operator = $_POST['operator'];
        $result = getOperator($operator, $firstValue, $secondValue);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <div class="container">
        <h2>SIMPLE CALCULATOR</h2>
        <form action="calc.php" method="POST">
            <div class="entry">
                <div class="form-group">
                    <label for="firstVal">Enter input one</label>
                    <input type="text" name="firstVal" id="firstVal">
                </div>
                <div class="form-group">
                    <label for="firstVal">Select Operator</label>
                    <select name="operator" id="operator">
                        <option value="add">+</option>
                        <option value="mul">*</option>
                        <option value="div">/</option>
                        <option value="sub">-</option>
                    </select>               
                </div>
                <div class="form-group">
                    <label for="firstVal">Enter input two</label>
                    <input type="text" name="secondVal" id="secondVal">
                </div>
            </div>                  
            <div class="btn">
                <button type="submit" value="submit" name="btnSbmit" id="btnSbmit"> = </button>
                <h2 class="result"><?php echo $result ?></h2>
            </div>

        </form>
    </div>   
</body>
</html>