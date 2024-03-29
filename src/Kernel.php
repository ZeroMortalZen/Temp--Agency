<?php

namespace App;

use App\Controller\DefaultController;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    private $DefaultController;

    public function construct()
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
