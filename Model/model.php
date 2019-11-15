<?php

class EPages {

    public function E_Pages_Model($enlacesM) {

        if ($enlacesM == "we" || $enlacesM == "services" || $enlacesM == "contact") 
        {
            $module = "Views/Modules/" . $enlacesM . ".php";

        } else if($enlacesM == "index") {

            $module = "Views/Modules/home.php";

        } elseif($enlacesM == "ok") {

            $module = "Views/Modules/services.php";

        } elseif ($enlacesM == "fail") {
         
            $module = "Views/Modules/home.php";

        } elseif ($enlacesM == "users") {
            
            $module = "Views/Modules/contact.php";

        } else {

            $module = "Views/Modules/home.php";

        }

        return $module;

    }

}