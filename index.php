
<!DOCTYPE html>
<html>
<head>
    <title>Tiêu đề trang web</title>
</head>

<body>
<form method="post">
    nhập kích thước ma trận: <input type="text" name="leng1">
    <input type="submit" name="load">


    <?php
    if (isset($_POST['load'])) {
        $x1 = $_POST['leng1'];
    }
    global $x1;
    function table()
    {

        global $x1;
        /*    $in = "<td> <input type='text' name='$i' value='<?php array_push($array,'$i')?>'> </td>";*/

        for ($i = 0, $j = -1; $i < $x1; $i++, $j--) {

            echo html_entity_decode("<tr>");
            echo html_entity_decode("<td> <input type='number' name='$i'>  </td>");
            echo html_entity_decode("<td> <input type='number' name='$j' ></td>");
            echo html_entity_decode("</tr>");
        }

    }

    function findMax($arr)
    {
        $max = $arr[0][0];
        for ($i = 1; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($arr[$i][$j] > $max) {
                    return $arr[$i][$j];
                }
            }
        }
    }


    ?>
    <form method="POST">
        <table border="2" cellpadding="30px" cellspacing="2px">
            <tr>
                <th>A</th>
                <th>B</th>
            </tr>
            <?php table(); ?>
        </table>
        <br>
        <input type="submit" name="load2" value="Max">
    </form>
        <?php
        if (isset($_POST['load2'])) {


            $arr1=[];
            $arr2=[];
            for ($i = 0; $i < $x1; $i++) {
               global $a;
                $a = $_POST["$i"];

                array_push($arr1, $a);

                for ($j = -1; $i < $x1; $j--) {
                   global $b;
                    $b = $_POST["$j"];
                    array_push($arr2, $b);
                }
            }
            echo $a;
            echo var_dump($arr1);

        }
        ?>

</body>
</html>
