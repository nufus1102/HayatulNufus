<html>
    <body>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $m = date("M");
        $d = date("D");
        $date = date("d-m-Y-H:i:s");
        if ($d == "Thu" && $m == "Sep")
        {
            $m = "September";
            $d = "kamis";
            echo "ini hari $d di bulan $m kami belajar pemograman Web <br>";
        }
        else
        echo "ini hari $d di bulan $m <br>";
        echo $d . "" . $date;
        ?>
    </body>
    </html>