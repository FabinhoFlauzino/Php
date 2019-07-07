<?php 

    $images = scandir("images");//percorre e mostra oq tem na pasta

    //var_dump($images); mostra o tipo de dados se for array a posição de cada um deles 

    $data = array();

    foreach ($images as $img) {
        if(!in_array($img, array(".", ".."))){//usando in_array primeiro usa o needle que é oq que vc precisa

            $filename = "images" . DIRECTORY_SEPARATOR . $img;

            $info = pathinfo($filename);

            //var_dump($info);
            $info["size"] = filesize($filename);
            $info["modified"] = date("d/m/Y", filemtime($filename));
            $info["url"] = "http://localhost/PHP/DIR/".str_replace("\\", "/", $filename);

            array_push($data, $info);
        }
    }

    echo json_encode($data);
?>