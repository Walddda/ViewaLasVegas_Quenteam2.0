<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_128905e539641a73a737ecc9c197e96d00a34065162b0bb9530401d265fcfa58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
</head>
<body>
    <h1>Las Vegas Viewa</h1>
    <h2>Quenteam2.0</h2>
    <ul>
        <li>
            <h2>hotel1</h2>
            <p>info_hotel1</p>
        </li>
        <li>
            <h2>hotel2</h2>
            <p>info_hotel2</p>
        </li>
        <li>
            <h2>hotel3</h2>
            <p>info_hotel3</p>
        </li>
    </ul>
    <hr>
    <ul>
        <f:for each=\"{hotels}\" as=\"text\" key=\"name\">\t
            <li>
                <h2>{name}</h2>
                <p>{text}</p>
            </li>
        </f:for>
    </ul>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "C:\\xampp\\htdocs\\WEBT\\ViewaLasVegas_Quenteam2.0\\index.html");
    }
}
