<?php

/* importer_flickr.html.twig */
class __TwigTemplate_463c501e589d6ecbe2714b7bba255a99 extends Twig_Template
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
        // line 7
        echo "
";
        // line 8
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 9
            echo "<div id=\"message\" class=\"error\"><p>";
            echo twig_escape_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true);
            echo "</p></div>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["ask_auth"]) ? $context["ask_auth"] : null)) {
            // line 13
            echo "
<h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Flickr Access"), "html", null, true);
            echo "</h3>
<p>
    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Background Manager has not been linked to a Flickr account. Do you wish to continue as an anonymous user, or login to your Flickr account?"), "html", null, true);
            echo "
</p>
<p style=\"margin-left:20px\">
    <label>
        <input type=\"radio\" value=\"yes\" name=\"do_login\" checked=\"checked\" />
        <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Login to my Flickr account"), "html", null, true);
            echo "</span>
    </label>
    <br />
    <label>
        <input type=\"radio\" value=\"no\" name=\"do_login\" />
        <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Continue anonymously"), "html", null, true);
            echo "</span>
    </label>
</p>

";
        } elseif ((isset($context["auth_redir"]) ? $context["auth_redir"] : null)) {
            // line 31
            echo "
<script type=\"text/javascript\">
//<![CDATA[
setTimeout(function() {   
    window.location.replace('";
            // line 35
            echo (isset($context["auth_redir"]) ? $context["auth_redir"] : null);
            echo "');
}, 3000);
//]]>
</script>
<h3>Flickr Access</h3>
<p>
    ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("You will be redirected to Flickr in just a moment."), "html", null, true);
            echo " 
    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["auth_redir"]) ? $context["auth_redir"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Click here if you are not being redirected."), "html", null, true);
            echo "</a>
</p>

";
        } else {
            // line 46
            echo "
";
            // line 47
            if ((!(isset($context["anonymous"]) ? $context["anonymous"] : null))) {
                // line 48
                echo "<h3>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Hello"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "</h3>
<p>
";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("You are currently logged in to Flickr"), "html", null, true);
                echo ". (<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["logout_url"]) ? $context["logout_url"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Logout"), "html", null, true);
                echo "</a>)
</p>
<p>
";
                // line 53
                echo $this->env->getExtension('translate')->transFilter("Select a Flickr Photo Set from your own account and click the <strong>Continue Import</strong> button. Or enter a Flickr username or ID (for example: <code>45244809@N00</code>) and click the <strong>Continue Import</strong> button, which then allows you to select from another Flickr user's Photo Sets.");
                echo "
</p>

";
            } else {
                // line 57
                echo "<h3>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Hello"), "html", null, true);
                echo "!</h3>

<p>
";
                // line 60
                echo $this->env->getExtension('translate')->transFilter("You are currently using Flickr as an anonymous user. To start, enter a Flickr username or ID (for example: <code>45244809@N00</code>) and click the <strong>Continue Import</strong> button. You can then select a Flickr Photo Set from that user.");
                echo "
</p>

<input type=\"hidden\" name=\"do_login\" value=\"no\" />
";
            }
            // line 65
            echo "
<table class=\"form-table\">
    <tbody>
        <tr valign=\"top\">
            <th scope=\"row\">
                <label for=\"flickr_username\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Flickr User"), "html", null, true);
            echo "</label>
            </th>
            <td>
                <input type=\"text\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["flickr_username"]) ? $context["flickr_username"] : null), "html", null, true);
            echo "\" name=\"flickr_username\" id=\"flickr_username\" />
                ";
            // line 74
            if ((!(isset($context["anonymous"]) ? $context["anonymous"] : null))) {
                echo "<span class=\"description\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Optional"), "html", null, true);
                echo ", \"";
                echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("by default"), "html", null, true);
                echo ".</span>";
            }
            // line 75
            echo "            </td>
        </tr>
        <tr valign=\"top\">
            <th scope=\"row\">
                <label for=\"flickr_photoset\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Flickr Photo Set"), "html", null, true);
            echo "</label>
            </th>
            <td>
                <select id=\"flickr_photoset\" class=\"postform\" name=\"flickr_photoset\" ";
            // line 82
            if ((!(isset($context["photosets"]) ? $context["photosets"] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                    ";
            // line 83
            if ((!(isset($context["photosets"]) ? $context["photosets"] : null))) {
                // line 84
                echo "                    <option value=\"\">(No photosets found)</option>
                    ";
            } else {
                // line 86
                echo "                    <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("-- Select a Flickr Photo Set --"), "html", null, true);
                echo "</option>
                    ";
            }
            // line 88
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photosets"]) ? $context["photosets"] : null));
            foreach ($context['_seq'] as $context["photoset_key"] => $context["photoset_value"]) {
                // line 89
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["photoset_key"]) ? $context["photoset_key"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["photoset_value"]) ? $context["photoset_value"] : null), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['photoset_key'], $context['photoset_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                </select>
                <span class=\"description\">
                ";
            // line 93
            if (((isset($context["anonymous"]) ? $context["anonymous"] : null) && ((isset($context["flickr_username"]) ? $context["flickr_username"] : null) == ""))) {
                // line 94
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("First enter the name or ID of a Flickr user and click the \"Continue Import\" button"), "html", null, true);
                echo ".
                ";
            }
            // line 96
            echo "                </span>
            </td>
        </tr>
    </tbody>
</table>
";
        }
        // line 102
        echo "




";
    }

    public function getTemplateName()
    {
        return "importer_flickr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 102,  225 => 96,  219 => 94,  217 => 93,  213 => 91,  202 => 89,  197 => 88,  191 => 86,  187 => 84,  185 => 83,  179 => 82,  173 => 79,  167 => 75,  157 => 74,  153 => 73,  147 => 70,  140 => 65,  132 => 60,  125 => 57,  118 => 53,  108 => 50,  100 => 48,  98 => 47,  95 => 46,  86 => 42,  82 => 41,  73 => 35,  67 => 31,  59 => 26,  51 => 21,  43 => 16,  38 => 14,  35 => 13,  33 => 12,  30 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
