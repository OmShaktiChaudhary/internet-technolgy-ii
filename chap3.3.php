  <?php
    $users = [['id' => 1, 'name' => 'Bob'], ['id' => 2, 'name' => 'Alice']];
    foreach($users as $x){
        if ($x['id'] == 2) {
        echo $x['name'];
    }
    }
    ?>