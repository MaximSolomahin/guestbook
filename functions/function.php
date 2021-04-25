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

    function viewMessage($pages){
        $notesOnPage = 3;
        $form = ($pages - 1) * $notesOnPage;

        $link = connectDB();

        $result = mysqli_query($link, "SELECT * FROM massage WHERE id > 0 ORDER BY data DESC LIMIT $form, $notesOnPage");
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
    function pagination($get){
        $link = connectDB();
        $result =  mysqli_query($link, "SELECT COUNT(*) as count FROM massage WHERE id > 0");
        $count = mysqli_fetch_assoc($result);

        $limit_page = 3;
        $total_pagination = ceil($count / $limit_page);




    }
