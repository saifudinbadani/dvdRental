
    <?php
    $host='localhost';
    $user='saifudin';
    $password=1234;
    $dbname='dvdrental';

    //Set DSN
    $dsn = 'pgsql:host='. $host.';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    #PRDO Query
    $stmnt = $pdo->query('SELECT * from actor');
    
    while($row = $stmnt->fetch()){
        echo $row->first_name. ' '. $row->last_name.'<br>';
    }

    #Prepared statements
    ?>
