<?php namespace SillyPastebin\Controller;

class ErrorController
{
    private $twig;

    public function __construct()
    {
        $this->twig = \SillyPastebin\Helper\TwigFactory::getTwig();
    }

    public function show404()
    {
        //header('HTTP/1.0 404 Not Found');
        $template = $this->twig->loadTemplate("404.html");
        echo $template->render(array());
    }
}