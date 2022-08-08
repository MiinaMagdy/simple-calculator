<?php
    if (isset($_GET['opr'])) {
        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];
        $opr = $_GET['opr'];
        if (is_numeric($num1) && is_numeric($num2)) {
            $ans = 0;
            switch ($opr) {
            case '+':
                $ans = $num1 + $num2;
                break;
                case '-':
                    $ans = $num1 - $num2;
                    break;
                    case '×':
                        $ans = $num1 * $num2;
                break;
                case '÷':
                    $ans = $num1 / $num2;
                    break;
            }
        }
        else {
            $ans = "Error please use numeric digits only";
        }
    }
?>

<style>
    .opr-btn{
        height: 60px;
        width: 60px;
        font-size: 40px;
        margin: 0 5px;
    }
    .number{
        height: 50px;
        width: 160px;
        font-size: 20px;
    }
    table{
        height: 150px;
        margin: 0 auto;
        border: 3px solid black;
        box-shadow: 0px 0px 30px;
    }
    .padd{
        padding: 10px;
        border: 3px solid rgb(205, 205, 205);
        border-radius: 5%;
    }
    p {
        color: red;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
    }
    .res {
        height: 50px;
        width: 350px;    
        font-size: 20px;
        color: red;
    }
</style>

<form action="" method="GET">
    <table>
        <tr>
            <th class="padd" colspan="2"><p>First Number</p></th>
            <th class="padd" colspan="2"><p>Second Number</p></th>
        </tr>
        <tr>
            <th class="padd" colspan="2"><input class="number" name="number1" type="text" value="<?= $num1 ?? null ?>"></th>
            <th class="padd" colspan="2"><input class="number" name="number2" type="text" value="<?= $num2 ?? null ?>"></th>
        </tr>
        <tr>
            <td class="padd"><input class="opr-btn" type="submit" name="opr" value="÷"></td>
            <td class="padd"><input class="opr-btn" type="submit" name="opr" value="×"></td>
            <td class="padd"><input class="opr-btn" type="submit" name="opr" value="-"></td>
            <td class="padd"><input class="opr-btn" type="submit" name="opr" value="+"></td>
        </tr>
        <tr>
            <th class="padd" colspan="4"><p>Result</p></th>
        </tr>
        <tr>
            <th class="padd" colspan="4"><input readonly class="res" type="text" value="<?= $ans ?? null ?>"></th>
        </tr>
    </table>
</form>
