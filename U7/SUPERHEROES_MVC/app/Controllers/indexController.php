<?php

namespace App\Controllers;
use App\Models\Superheroes;

class indexController extends BaseController
{

    public function searchAllSuperheroesAction()
    {

        if (isset($_POST['nombre']) && $_POST['nombre']!="") {
            $superheroes = Superheroes::getInstancia();
            $superheroes->setNombre($_POST['nombre']);
            $data = $superheroes->get();
            $this->renderHTML('../views/index_views.php', $data);
        } else {
            $superheroes = Superheroes::getInstancia();
            $data = $superheroes->getAll();
            $this->renderHTML('../views/index_views.php', $data);
        }
    }

    public function indexAction(){
        if (isset($_POST['login'])) {
            AuthController::getLogin($_POST['name'], $_POST['password']);
            print_r($_SESSION['user']);
            print_r($_SESSION['id']);
        }else{
            $superheroes = Superheroes::getInstancia();
            $data = $superheroes->getAll();
            $this->renderHTML('../views/index_views.php', $data);
        }
    }

    public function setSuperheroesAction()
    {
        // if ($_SESSION['perfil']!="autorizado") {
        //     header('Location: /');
        // }else{
            if (isset($_POST['nombre']) && isset($_POST['velocidad'])) {
                $superheroes = Superheroes::getInstancia();
                $superheroes->setNombre($_POST['nombre']);
                $superheroes->setVelocidad($_POST['velocidad']);
                $superheroes->set();
                header('Location: /');
            } else {
                $this->renderHTML('../views/addsuperheroes_views.php');
            }
        }
    // }

    public function deleteSuperheroesAction($request)
    {

        $array = explode('/', $request);
        $id = end($array);
        $superheroes = Superheroes::getInstancia();
        $superheroes->setId($id);
        $superheroes->delete();
        header('Location: /');
    }

    public function editSuperheroesAction($request)
    {
        if (isset($_POST['nombre']) && isset($_POST['velocidad'])) {
            $array = explode('/', $request);
            $id = end($array);
            $superheroes = Superheroes::getInstancia();
            $superheroes->setId($id);
            $superheroes->setNombre($_POST['nombre']);
            $superheroes->setVelocidad($_POST['velocidad']);
            $superheroes->edit();
            header('Location: /');
        } else {
            $array = explode('/', $request);
            $id = end($array);
            $superheroes = Superheroes::getInstancia();
            $superheroes->setId($id);
            $data = $superheroes->getById();
            $this->renderHTML('../views/editsuperheroes_views.php', $data);
        }
    }
}
