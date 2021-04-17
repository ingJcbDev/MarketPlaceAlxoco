<?php

class RoutesController
{

    /*=============================================
    Ruta Principal
    =============================================*/

    public function index()
    {

        include "routes/route.php";

    }

    /*=============================================
    Nombre de la base de datos
    =============================================*/

    public static function database()
    {

        return "marketplace";
    }

}
