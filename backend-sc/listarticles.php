<?php
 
  header('Access-Control-Allow-Origin:*');
  header("Access-Control-Allow-Headers:access");
  header("Access-Control-Allow-Methods:GET");
  header("Access-Control-Allow-Credentials:true");
  header("Content-Type:application/json; charset=UTF-8");
  
 
  include_once 'Database.php';
  include_once 'Article.php';
  
  $database = new Database();
  $db=$database->connect();

  $art = new Article($db) ; 
  $res = $art->getAll() ; 

  $num = $res->rowCount();
  

  if($num > 0){
        
    $articleArr = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $art_item = array(
            "id" => $id,
            "Title" => $Title,
            "Image" => $Image,
            "HeaderImage" => $HeaderImage,
            "Introduction" => $Introduction,
            "Description" => $Description,
            "LastMod" => $LastMod,
            "Language" => $Language,
            "KeyWords" => $KeyWords,
            "State" => $State,
            "NumVisit" => $NumVisit,
            "IdTheme" => $IdTheme,
            "IdUser" => $IdUser
        );
        array_push($articleArr, $art_item);
        
    }
    echo json_encode($articleArr);
}
else{http_response_code(404);
  echo json_encode(
      array("message" => "No record found.")
  );
}
?>