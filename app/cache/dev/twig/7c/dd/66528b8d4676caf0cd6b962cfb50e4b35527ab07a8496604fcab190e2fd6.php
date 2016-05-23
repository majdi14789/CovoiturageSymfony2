<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_7cdd66528b8d4676caf0cd6b962cfb50e4b35527ab07a8496604fcab190e2fd6 extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  1119 => 830,  1095 => 809,  1089 => 806,  1085 => 805,  1077 => 800,  1069 => 795,  1049 => 777,  1047 => 774,  1045 => 773,  1018 => 749,  998 => 732,  978 => 715,  958 => 698,  938 => 681,  918 => 664,  898 => 647,  878 => 630,  858 => 613,  838 => 596,  817 => 578,  796 => 560,  771 => 538,  765 => 535,  737 => 510,  717 => 493,  697 => 476,  677 => 459,  657 => 442,  637 => 425,  617 => 408,  597 => 391,  577 => 374,  557 => 357,  536 => 339,  515 => 321,  490 => 299,  484 => 296,  417 => 232,  403 => 221,  378 => 199,  365 => 189,  348 => 175,  335 => 166,  266 => 870,  264 => 166,  246 => 151,  242 => 150,  238 => 149,  217 => 132,  212 => 130,  208 => 129,  204 => 128,  201 => 127,  198 => 126,  187 => 117,  164 => 96,  159 => 94,  154 => 93,  152 => 92,  147 => 89,  142 => 87,  137 => 86,  135 => 85,  122 => 75,  115 => 71,  111 => 70,  107 => 69,  102 => 67,  91 => 35,  51 => 22,  47 => 21,  40 => 17,  33 => 13,  20 => 2,);
    }
}
