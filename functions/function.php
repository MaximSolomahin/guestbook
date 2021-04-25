<?php
    function connectDB(){
         $link = mysqli_connect('guestbook', 'root', 'root', 'test')
                or die (mysqli_error($link));
         mysqli_query($link, "SET NAMES 'utf-8'");

         return $link;
    }

    function addMassage($name, $text, $date){
        $link = connectDB();
        $result = mysqli_query($link, "INSERT INTO massage SET name=\"$name\", massage=\"$text\", data=\"$date\"");
        mysqli_close($link);
        return $result;
    }

    function viewMessage(){
        $link = connectDB();

        $result = mysqli_query($link, "SELECT * FROM massage WHERE id > 0 ORDER BY id LIMIT 3");
        for ($massage = []; $row = mysqli_fetch_assoc($result); $massage[] = $row);

        foreach ($massage as $elem){
        ?>
        <div class="note">
            <p>
                <span class="date"><?=$elem['data']?></span>
                <span class="name"><?=$elem['name']?></span>
            </p>
            <p><?=$elem['massage']?></p>
        </div>
    <?php
        }
    }
    ?>