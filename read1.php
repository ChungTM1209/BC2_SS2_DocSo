<form action="index.php">
    <?php
    function doc0_9($num)
    {
        switch ($num) {
            case "0":
                return "zero";
            case "1":
                return "one";
            case "2":
                return "two";
            case "3":
                return "three";
            case "4":
                return "four";
            case "5":
                return "five";
            case "6":
                return "six";
            case "7":
                return "seven";
            case "8":
                return "eight";
            case "9":
                return "nine";


        }
    }

    function doc11_19($num)
    {
        switch ($num) {
            case "0":
                return "ten";
            case "1":
                return "eleven";
            case "2":
                return "twelve";
            case "3":
                return "thirteen";
            case "4":
                return "fourteen";
            case "5":
                return "fifteen";
            case "6":
                return "sixteen";
            case "7":
                return "seventeen";
            case "8":
                return "eighteen";
            case "9":
                return "nineteen";
        }
    }

    function docSoTron($num)
    {
        switch ($num) {
            case "1":
                return "ten ";
            case "2":
                return "twenty ";
            case "3":
                return "thirty ";
            case "4":
                return "fourty ";
            case "5":
                return "fifty ";
            case "6":
                return "sixty ";
            case "7":
                return "seventy ";
            case "8":
                return "eighty ";
            case "9":
                return "ninety ";
        }
    }

    function read($num)
    {
        $hundred = floor($num / 100);
        $dozen = floor(($num % 100) / 10);
        $unit = ($num % 100) % 10;
        $text = "";
        if ($hundred > 0) {
            $text .= doc0_9($hundred) . "hundred";
            if ($dozen > 1) {
                if ($unit > 0) {
                    $text .= " and " . docSoTron($dozen) . doc0_9($unit);
                }
                if ($unit === 0) {
                    $text .= " and " . docSoTron($dozen);
                }
            } elseif ($dozen == 0) {
                if ($unit > 0) {
                    $text .= " and " . doc0_9($unit);
                }
            } else {
                if ($unit >= 0) {
                    $text .= " and " . doc11_19($unit);
                }
            }
        } else {
            if ($dozen == 0) {
                $text .= doc0_9($unit);
            } elseif ($dozen == 1) {
                $text .= doc11_19($unit);
            } else {
                $text .= docSoTron($dozen) . doc0_9($unit);
            }
        }
        return $text;

    }

    $num = $_POST["num"];
    if ($num >= 0 && $num < 1000) {
        echo(read($num) . "<br>");
    } else {
        echo "Out of ability" . "<br>";
    }
    ?>
    <input type="submit" value="Again">

</form>

