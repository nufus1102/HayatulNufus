<html>
    <body>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $d = date("D");
        $date = date("d-m-Y-H:i:s");
        if ($d == "Mon")
        {
            $d = "senin";
            echo "selamat belajar <br>";
        }
        else
        echo "ini hari $d <br>";
        echo $d . "" . $date;
        ?>
    </body>
    </html>