<?php


namespace App;


use App\Controller\DefaultController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private $DefaultController;

    public function __construct()
    {
        $twig = new Environment(new FilesystemLoader(self::PATH_TO_TEMPLATES));
        $this->DefaultController = new DefaultController ($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action) {
            case 'PostJob':
                $this->DefaultController->PostJob();
                break;

            case 'index':
            default:
                $this->DefaultController->index();
        }
    }
}