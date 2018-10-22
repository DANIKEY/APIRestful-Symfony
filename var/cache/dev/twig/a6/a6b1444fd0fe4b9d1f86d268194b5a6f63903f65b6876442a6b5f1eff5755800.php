<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_403e4a76c9d06359f2bd16d038bf7e94513405cafec6092c435a0db4394ed71b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49811cf997c6c9b2773113aa5ad9c7ee7d98ee2e47678288f94c0bd8af983b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49811cf997c6c9b2773113aa5ad9c7ee7d98ee2e47678288f94c0bd8af983b85->enter($__internal_49811cf997c6c9b2773113aa5ad9c7ee7d98ee2e47678288f94c0bd8af983b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ec2c2feefdcb5d2d904769db729aed37a6ab35e6e26358db55875162cc7276d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2c2feefdcb5d2d904769db729aed37a6ab35e6e26358db55875162cc7276d3->enter($__internal_ec2c2feefdcb5d2d904769db729aed37a6ab35e6e26358db55875162cc7276d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_49811cf997c6c9b2773113aa5ad9c7ee7d98ee2e47678288f94c0bd8af983b85->leave($__internal_49811cf997c6c9b2773113aa5ad9c7ee7d98ee2e47678288f94c0bd8af983b85_prof);

        
        $__internal_ec2c2feefdcb5d2d904769db729aed37a6ab35e6e26358db55875162cc7276d3->leave($__internal_ec2c2feefdcb5d2d904769db729aed37a6ab35e6e26358db55875162cc7276d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/ivstore-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
