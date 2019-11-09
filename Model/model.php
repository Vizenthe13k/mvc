<?php

class EPages {

    public function E_Pages_Model($enlacesM) {

        if ($enlacesM == "we" || $enlacesM == "services" || $enlacesM == "contact") 
        {
            $module = "Views/Modules/" . $enlacesM . ".php";

        } else if($enlacesM == "index") {

            $module = "Views/Modules/home.php";

        } else {

            $module = "Views/Modules/home.php";

        }

        return $module;

    }

}