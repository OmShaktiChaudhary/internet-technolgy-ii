<?php


        $str = "tag1,tag2,tag3";

        echo "at start => $str <br>";

        // Convert string to array

        $arr = explode(",", $str);

        // Convert array back to formatted string

        $result = implode(" | ", $arr);

        echo "after => $result";      // tag1 | tag2 | tag3

    ?>