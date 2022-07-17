<?php
class Article{

    private $table= 'article';
    private $conn ; 

    public $id; 
    public $Title;
    public $Image;
    public $HeaderImage;
    public $Introduction; 
    public $Description; 
    public $LastMod ;
    public $Language;
    public $KeyWords; 
    public $State;
    public $NumVisit ;
    public $IdTheme;
    public $IdUser;



    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function getAll()
    {
        $query = "SELECT id,Title,Image,HeaderImage,
       Introduction,Description,LastMod,Language,
       KeyWords,State,
       NumVisit,IdTheme,IdUser
        
       FROM " . $this->table .""  ; 
    
        $stmt=$this->conn->prepare($query);

        $stmt->execute();
        return$stmt;
    }


    

}
?>