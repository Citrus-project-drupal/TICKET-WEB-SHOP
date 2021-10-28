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

<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
/* __string_template__70e1a31703d0ad0d19d68737c4fe80cbf0c45d981f4e0af92281a2de37518b20 */
class __TwigTemplate_89522c9e55d15d50f0ef033bbf46a95081995c25ff26e75b1e39d0cc011a0d62 extends \Twig\Template
=======
/* core/modules/system/templates/off-canvas-page-wrapper.html.twig */
class __TwigTemplate_02e1d627e308c2c6bb4ddbd26255f0c390995826f6fcb3dadcabedb9f5dfddf4 extends \Twig\Template
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 1, $this->source), "html", null, true);
=======
        // line 22
        if (($context["children"] ?? null)) {
            // line 23
            echo "  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 24, $this->source), "html", null, true);
            echo "
  </div>
";
        }
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
    }

    public function getTemplateName()
    {
<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
        return "__string_template__70e1a31703d0ad0d19d68737c4fe80cbf0c45d981f4e0af92281a2de37518b20";
=======
        return "core/modules/system/templates/off-canvas-page-wrapper.html.twig";
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  41 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
        return new Source("", "__string_template__70e1a31703d0ad0d19d68737c4fe80cbf0c45d981f4e0af92281a2de37518b20", "");
=======
        return new Source("", "core/modules/system/templates/off-canvas-page-wrapper.html.twig", "/app/web/core/modules/system/templates/off-canvas-page-wrapper.html.twig");
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
    }
    
    public function checkSecurity()
    {
<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
        static $tags = array();
        static $filters = array("escape" => 1);
=======
        static $tags = array("if" => 22);
        static $filters = array("escape" => 24);
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
<<<<<<< HEAD:web/sites/default/files/php/twig/617930350a089___string_template__70e1a3_B0J_hchXU3lMwqJ5VDaeGp3KX/rA1kDEgfmLBfYmCYCtPyhV4N1heoy9uG_GK1vjfUHjQ.php
                [],
=======
                ['if'],
>>>>>>> 6ea796b4b58290fcee00f5b25cc11f7de067db37:web/sites/default/files/php/twig/61791b6d72199_off-canvas-page-wrapper.h_cAhz1kQOTfvejS7MfMtauTDl5/DKs72PvJvTEnVysZiGEbiOKfPMN7OfdgM6HR1xu2fsE.php
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
