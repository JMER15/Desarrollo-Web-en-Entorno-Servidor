<?php

namespace App\Controllers;

class indexController extends BaseController
{

    public function IndexAction()
    {

        $data = array('message' => 'hola mundo');
        $this->renderHTML('../views/index_view.php', $data);

    }

    public function SaludaAction($request)
    {

        $array = explode('/',$request);
        $data = array('message' => end($array));
        $this->renderHTML('../views/saluda_view.php', $data);

    }
}
