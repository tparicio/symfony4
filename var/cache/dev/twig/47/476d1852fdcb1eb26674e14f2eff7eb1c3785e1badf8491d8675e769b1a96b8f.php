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

/* contact/_form.html.twig */
class __TwigTemplate_9c6c8ae60fa01da039dbb72c3c8af2cdd37077427f9e2fab84b9f65f2601ddab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"card border-primary rounded-0\">
        <div class=\"card-header p-0\">
            <div class=\"bg-info text-white text-center py-2\">
                <h3><i class=\"fa fa-envelope\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact.form.title"), "html", null, true);
        echo "</h3>
                <p class=\"m-0\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact.form.info"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"card-body p-3\">
            <!--Body-->
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"far fa-user text-info\"></i></div>
                    </div>
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget');
        echo "
                    <small>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-at text-info\"></i></div>
                    </div>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'widget');
        echo "
                    <small>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"far fa-envelope-open text-info\"></i></div>
                    </div>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "subject", [], "any", false, false, false, 40), 'widget');
        echo "
                    <small>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "subject", [], "any", false, false, false, 41), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "subject", [], "any", false, false, false, 44), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-font text-info\"></i></div>
                    </div>
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "message", [], "any", false, false, false, 52), 'widget');
        echo "
                    <small>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "message", [], "any", false, false, false, 56), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact.form.priority"), "html", null, true);
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "priority", [], "any", false, false, false, 62), 'widget');
        echo "
                    <small>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "priority", [], "any", false, false, false, 63), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "priority", [], "any", false, false, false, 66), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-briefcase text-info\"></i></div>
                    </div>
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "department", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 78
        echo "
                    <small>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "department", [], "any", false, false, false, 79), 'help');
        echo "</small>
                </div>
                <div class=\"form-error\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "department", [], "any", false, false, false, 82), 'errors');
        echo "
                </div>
            </div>

            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'widget');
        echo "

            <div class=\"text-center\">
                <input type=\"submit\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "\" class=\"btn btn-info btn-block rounded-0 py-2\">
            </div>
        </div>
    </div>
";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
<!--Form with header-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 93,  197 => 89,  191 => 86,  184 => 82,  178 => 79,  175 => 78,  173 => 74,  162 => 66,  156 => 63,  152 => 62,  148 => 61,  140 => 56,  134 => 53,  130 => 52,  119 => 44,  113 => 41,  109 => 40,  98 => 32,  92 => 29,  88 => 28,  77 => 20,  71 => 17,  67 => 16,  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"card border-primary rounded-0\">
        <div class=\"card-header p-0\">
            <div class=\"bg-info text-white text-center py-2\">
                <h3><i class=\"fa fa-envelope\"></i> {{ 'contact.form.title' | trans }}</h3>
                <p class=\"m-0\">{{ 'contact.form.info' | trans }}</p>
            </div>
        </div>
        <div class=\"card-body p-3\">
            <!--Body-->
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"far fa-user text-info\"></i></div>
                    </div>
                    {{ form_widget(form.name) }}
                    <small>{{ form_help(form.name) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.name) }}
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-at text-info\"></i></div>
                    </div>
                    {{ form_widget(form.email) }}
                    <small>{{ form_help(form.email) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.email) }}
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"far fa-envelope-open text-info\"></i></div>
                    </div>
                    {{ form_widget(form.subject) }}
                    <small>{{ form_help(form.subject) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.subject) }}
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-font text-info\"></i></div>
                    </div>
                    {{ form_widget(form.message) }}
                    <small>{{ form_help(form.message) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.message) }}
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    {{ 'contact.form.priority' | trans }}
                    {{ form_widget(form.priority) }}
                    <small>{{ form_help(form.priority) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.priority) }}
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group mb-2\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\"><i class=\"fa fa-briefcase text-info\"></i></div>
                    </div>
                    {{ form_widget(form.department, {
                        'attr': {
                            'class': 'form-control'
                        }
                    }) }}
                    <small>{{ form_help(form.department) }}</small>
                </div>
                <div class=\"form-error\">
                    {{ form_errors(form.department) }}
                </div>
            </div>

            {{ form_widget(form) }}

            <div class=\"text-center\">
                <input type=\"submit\" value=\"{{ 'action.save' | trans }}\" class=\"btn btn-info btn-block rounded-0 py-2\">
            </div>
        </div>
    </div>
{{ form_end(form) }}
<!--Form with header-->
", "contact/_form.html.twig", "/var/www/sites/symfony/templates/contact/_form.html.twig");
    }
}
