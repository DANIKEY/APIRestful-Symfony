<?php

/* base.html.twig */
class __TwigTemplate_4e93adcf1adcf4b50f2baf9fbcf77d1b387ddaed9c3f090b6eeb6c6960b0ea09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6d47aaaff2e19b30a6131955a0c5b070fa6c465c791b584c90ab8628ea46c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d47aaaff2e19b30a6131955a0c5b070fa6c465c791b584c90ab8628ea46c0b->enter($__internal_c6d47aaaff2e19b30a6131955a0c5b070fa6c465c791b584c90ab8628ea46c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_30dc132969cd7ab9a8056383aa280de25676a6a298cc04491d987a2ef1e6f719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dc132969cd7ab9a8056383aa280de25676a6a298cc04491d987a2ef1e6f719->enter($__internal_30dc132969cd7ab9a8056383aa280de25676a6a298cc04491d987a2ef1e6f719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c6d47aaaff2e19b30a6131955a0c5b070fa6c465c791b584c90ab8628ea46c0b->leave($__internal_c6d47aaaff2e19b30a6131955a0c5b070fa6c465c791b584c90ab8628ea46c0b_prof);

        
        $__internal_30dc132969cd7ab9a8056383aa280de25676a6a298cc04491d987a2ef1e6f719->leave($__internal_30dc132969cd7ab9a8056383aa280de25676a6a298cc04491d987a2ef1e6f719_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_42a2869939f56a3c39acbfd3d7828cc5c0569aeaccb250f4b0e1db78b9aec899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a2869939f56a3c39acbfd3d7828cc5c0569aeaccb250f4b0e1db78b9aec899->enter($__internal_42a2869939f56a3c39acbfd3d7828cc5c0569aeaccb250f4b0e1db78b9aec899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1603aaebbf13b0795fc34e3ccc4fc773d8cc32a701d32414e041cd72f3dbdf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1603aaebbf13b0795fc34e3ccc4fc773d8cc32a701d32414e041cd72f3dbdf41->enter($__internal_1603aaebbf13b0795fc34e3ccc4fc773d8cc32a701d32414e041cd72f3dbdf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1603aaebbf13b0795fc34e3ccc4fc773d8cc32a701d32414e041cd72f3dbdf41->leave($__internal_1603aaebbf13b0795fc34e3ccc4fc773d8cc32a701d32414e041cd72f3dbdf41_prof);

        
        $__internal_42a2869939f56a3c39acbfd3d7828cc5c0569aeaccb250f4b0e1db78b9aec899->leave($__internal_42a2869939f56a3c39acbfd3d7828cc5c0569aeaccb250f4b0e1db78b9aec899_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_927ea066ed53c130811454303704f087dc8f65edff4425b09a6d5208b27ea4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ea066ed53c130811454303704f087dc8f65edff4425b09a6d5208b27ea4ec->enter($__internal_927ea066ed53c130811454303704f087dc8f65edff4425b09a6d5208b27ea4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d9d519b5e57031409a9dd88284275c152897dadbf411c561724b45dead4a3650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d519b5e57031409a9dd88284275c152897dadbf411c561724b45dead4a3650->enter($__internal_d9d519b5e57031409a9dd88284275c152897dadbf411c561724b45dead4a3650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d9d519b5e57031409a9dd88284275c152897dadbf411c561724b45dead4a3650->leave($__internal_d9d519b5e57031409a9dd88284275c152897dadbf411c561724b45dead4a3650_prof);

        
        $__internal_927ea066ed53c130811454303704f087dc8f65edff4425b09a6d5208b27ea4ec->leave($__internal_927ea066ed53c130811454303704f087dc8f65edff4425b09a6d5208b27ea4ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c058768556d8641c2a12f0df958459dd2da551904cec8983d3a57ab3f206e079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c058768556d8641c2a12f0df958459dd2da551904cec8983d3a57ab3f206e079->enter($__internal_c058768556d8641c2a12f0df958459dd2da551904cec8983d3a57ab3f206e079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c389132ac9cb8b0107b203ea8b311e63a0003f44fe4f4a6088139805ff7b1d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c389132ac9cb8b0107b203ea8b311e63a0003f44fe4f4a6088139805ff7b1d5b->enter($__internal_c389132ac9cb8b0107b203ea8b311e63a0003f44fe4f4a6088139805ff7b1d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c389132ac9cb8b0107b203ea8b311e63a0003f44fe4f4a6088139805ff7b1d5b->leave($__internal_c389132ac9cb8b0107b203ea8b311e63a0003f44fe4f4a6088139805ff7b1d5b_prof);

        
        $__internal_c058768556d8641c2a12f0df958459dd2da551904cec8983d3a57ab3f206e079->leave($__internal_c058768556d8641c2a12f0df958459dd2da551904cec8983d3a57ab3f206e079_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efc3f757b869b632e2a396c0b4ef0371595fbab7cad024245ce8ea85f88c4abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc3f757b869b632e2a396c0b4ef0371595fbab7cad024245ce8ea85f88c4abf->enter($__internal_efc3f757b869b632e2a396c0b4ef0371595fbab7cad024245ce8ea85f88c4abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45d8d3a942014e1f9c179afabb3fc9ee06a4d275af04b3451b0f6a9059815a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d8d3a942014e1f9c179afabb3fc9ee06a4d275af04b3451b0f6a9059815a1d->enter($__internal_45d8d3a942014e1f9c179afabb3fc9ee06a4d275af04b3451b0f6a9059815a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45d8d3a942014e1f9c179afabb3fc9ee06a4d275af04b3451b0f6a9059815a1d->leave($__internal_45d8d3a942014e1f9c179afabb3fc9ee06a4d275af04b3451b0f6a9059815a1d_prof);

        
        $__internal_efc3f757b869b632e2a396c0b4ef0371595fbab7cad024245ce8ea85f88c4abf->leave($__internal_efc3f757b869b632e2a396c0b4ef0371595fbab7cad024245ce8ea85f88c4abf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/ivstore-api/app/Resources/views/base.html.twig");
    }
}
