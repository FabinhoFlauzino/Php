<?php 

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root","");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    
    $stmt->execute();

    $stmt = $conn->prepare("INSERT  INTO tb_usuarios (deslogin,senha) values ('Fulano',789)");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>".$key.":</strong>".$value."<br/>";
        }
    }
    
    echo "-----------------------------------<br>"

?>