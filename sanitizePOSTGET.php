  function sanitizePost($PostArrayFragment=null) {
       if (!isset($_NEW_POST)) {
           static $_NEW_POST=array();
       }
       
       if ($PostArrayFragment) {
           $subArray=array();
           $POST_ITEMS=$PostArrayFragment;       
       } else {
           $POST_ITEMS=&$_POST;
       }
       
       foreach($POST_ITEMS as $key => $value) {
       
           if (!is_array($_POST[$key])) {
                if (!is_array($PostArrayFragment)) {
                    $_NEW_POST[htmlspecialchars($key)]=htmlspecialchars($value);
                } else {
                    $subArray[htmlspecialchars($key)]=htmlspecialchars($value);
                }
           } else {
                if (!is_array($PostArrayFragment)) {
                    $_NEW_POST[htmlspecialchars($key)]=htmlspecialchars($value);
                } else {
                    $subArray[htmlspecialchars($key)]=htmlspecialchars($value);
                }
           }
       
       }
       
       if ($PostArrayFragment===null) {
           $_POST=$_NEW_POST;
           return;die();
       } else {
           return $subArray;
       }
       
       
   } 
    

function sanitizeGet($GetArrayFragment=null) {
   
       if (!isset($_NEW_GET)) {
           static $_NEW_GET=array();
       }
       if ($GetArrayFragment) {
           $subArray=array();
           $GET_ITEMS=$GetArrayFragment;       
       } else {
           $GET_ITEMS=&$_GET;
       }
       
       foreach($GET_ITEMS as $key => $value) {
       
           if (!is_array($_GET[$key])) {
                if (!is_array($GetArrayFragment)) {
                    $_NEW_GET[htmlspecialchars($key)]=htmlspecialchars($value);
                } else {
                    $subArray[htmlspecialchars($key)]=htmlspecialchars($value);
                }
           } else {
                if (!is_array($GetArrayFragment)) {
                    $_NEW_GET[htmlspecialchars($key)]=htmlspecialchars($value);
                } else {
                    $subArray[htmlspecialchars($key)]=htmlspecialchars($value);
                }
           }
       
       }
       
       if ($GetArrayFragment===null) {
           $_GET=$_NEW_GET;
           return;die();
       } else {
           return $subArray;
       }
       
       
   } 
