<html>
    <body>
        <?php
        echo "Mencari jumlah vokal dalam suatu kata";
        echo "<br>";//ganti baris
        $jumlah = 0;
        $kata="Belajar PHP";//suatu kata 
        $huruf="a";//huruf vokal yang dicari bisa huruf a,e,i,u,o
        for($i=0; $i<strlen($kata); $i++)
        {
            if(substr($kata, $i, 1)== $huruf)
            {
                $jumlah ++;
            }
        }
        echo "jumlah huruf" . $huruf . "dalam kata".
        $kata . ":"; echo "<br>"; echo $jumlah;
        ?>
        </body>
        </html>