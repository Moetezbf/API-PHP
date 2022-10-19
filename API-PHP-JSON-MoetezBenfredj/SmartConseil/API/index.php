<?php
require_once __DIR__ .'/config.php';

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

class API{
    function Select(){
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM article ORDER BY id');
        $data->execute();
        while($OutputData = $data -> fetch(PDO::FETCH_ASSOC)){
            $users[$OutputData['id']] = array(
                'id' => $OutputData['id'],
                'Title' => $OutputData['Title'],
                'Image' => URL."images/cours/".$OutputData['Image'],
                'HeaderImage' => $OutputData['HeaderImage'],
                'Introduction' => $OutputData['Introduction'],
                'Description' => $OutputData['Description'],
                'LastMod' => $OutputData['LastMod'],
                'Language' => $OutputData['Language'],
                'KeyWords' => $OutputData['KeyWords'],
                'State' => $OutputData['State'],
                'NumVisit' => $OutputData['NumVisit'],
                'IdTheme' => $OutputData['IdTheme'],
                'IdUser' => $OutputData['IdUser'],
                'IdHost' => $OutputData['IdHost']
            );
        }
        return json_encode($users);
    }
}
$API = new API;
header('Content-type: application/json');
echo $API->Select();
?>