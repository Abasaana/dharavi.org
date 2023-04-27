<?php

/* styles.html.twig */
class __TwigTemplate_572886e3c3b3ce3dc9bb58ccb9ca5b980fd7f772d841c1287c1424db9f52b7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "styles.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"home\" class=\"s-home page-hero target-section\"
             data-parallax=\"scroll\" data-image-src=\"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/hero-bg.jpg");
        echo "\"
             data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\"
    >

        <div class=\"overlay\"></div>
        <div class=\"shadow-overlay\"></div>

        <div class=\"home-content\">

            <div class=\"row home-content__main\">

                <h3>";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>

                <h1>
                    ";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "banner_content", array());
        echo "
                </h1>

            </div>

        </div> <!-- end home-content -->

        <ul class=\"home-social\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 28
            echo "                <li>
                    <a href=\"";
            // line 29
            echo $this->getAttribute($context["icon"], "socialIconLink", array());
            echo "\">
                        <i class=\"";
            // line 30
            echo $this->getAttribute($context["icon"], "socialIconClass", array());
            echo "\" aria-hidden=\"true\"></i>
                        <span>";
            // line 31
            echo $this->getAttribute($context["icon"], "socialIconText", array());
            echo "</span></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->

    <section class=\"s-styles\">

        <div class=\"row narrow section-intro add-bottom text-center\">

            <div class=\"col-twelve tab-full\">

                <h1>Style Guide.</h1>

                <p class=\"lead\">Lorem ipsum Officia elit ad tempor dolore est ex incididunt incididunt occaecat culpa deserunt sunt labore in cillum
                    ullamco magna in Excepteur consequat in reprehenderit proident mollit incididunt officia commodo. Duis ea officia sed dolor
                    pariatur enim dolore dolore quis incididunt nulla exercitation commodo veniam et ea incididunt.</p>

            </div>

        </div>

        <div class=\"row\">

            <div class=\"col-six tab-full\">

                <h3>Paragraph and Image</h3>

                <p>
                    <a href=\"";
        // line 61
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\"><img width=\"120\" height=\"120\" class=\"pull-left\" alt=\"sample-image\"
                                                  src=\"";
        // line 62
        echo ($context["theme_url"] ?? null);
        echo "/images/sample-image.jpg\"></a>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id urna. Morbi tincidunt, orci
                    ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui
                    pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem
                    tellus eleifend magna, eget fringilla velit magna id neque posuere nunc justo tempus leo.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci
                    ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui
                    pede condimentumodio, ac blandit ante orci ut diam.
                </p>

                <p>A
                    <a href=\"";
        // line 76
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">link</a>,
                    <abbr title=\"this really isn't a very good description\">abbrebation</abbr>,
                    <strong>strong text</strong>,
                    <em>em text</em>,
                    <del>deleted text</del>
                    , and
                    <mark>this is a mark text.</mark>
                    <code>.code</code>
                </p>

            </div>

            <div class=\"col-six tab-full\">

                <h3>Drop Caps</h3>

                <p class=\"drop-cap\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named
                    Duden flows by their place and supplies it with the necessary regelialia. Morbi tincidunt, orci ac convallis aliquam, lectus
                    turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac
                    blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget
                    fringilla velit magna id neque.
                </p>

                <h3>Small Print</h3>

                <p>Buy one widget, get one free!
                    <small>(While supplies last. Offer expires on the vernal equinox. Not valid in Ohio.)</small>
                </p>

            </div>

        </div> <!-- end row -->

        <div class=\"row\">

            <div class=\"col-six tab-full\">

                <h3>Pull Quotes</h3>

                <aside class=\"pull-quote\">
                    <blockquote>
                        <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has
                            no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the
                            name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </blockquote>
                </aside>

            </div>

            <div class=\"col-six tab-full\">

                <h3>Block Quotes</h3>

                <blockquote cite=\"http://where-i-got-my-info-from.com\">
                    <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great
                        work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As
                        with all matters of the heart, you'll know when you find it.
                    </p>
                    <cite>
                        <a href=\"";
        // line 136
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">Steve Jobs</a>
                    </cite>
                </blockquote>

                <blockquote>
                    <p>Good design is as little design as possible.</p>
                    <cite>Dieter Rams</cite>
                </blockquote>

            </div>

        </div> <!-- end row -->

        <div class=\"row half-bottom\">

            <div class=\"col-six tab-full\">

                <h3>Example Lists</h3>

                <ol>
                    <li>Here is an example</li>
                    <li>of an ordered list.</li>
                    <li>A parent list item.
                        <ul>
                            <li>one</li>
                            <li>two</li>
                            <li>three</li>
                        </ul>
                    </li>
                    <li>A list item.</li>
                </ol>

                <ul class=\"disc\">
                    <li>Here is an example</li>
                    <li>of an unordered list.</li>
                </ul>

                <h3>Definition Lists</h3>

                <h5>a) Multi-line Definitions (default)
                </h5>

                <dl>
                    <dt>
                        <strong>This is a term</strong>
                    </dt>
                    <dd>this is the definition of that term, which both live in a
                        <code>dl</code>.
                    </dd>
                    <dt>
                        <strong>Another Term</strong>
                    </dt>
                    <dd>And it gets a definition too, which is this line</dd>
                    <dd>This is a 2<sup>nd</sup>
                        definition for a single term. A
                        <code>dt</code>
                        may be followed by multiple
                        <code>dd</code>s.
                    </dd>
                </dl>

            </div>

            <div class=\"col-six tab-full\">

                <h3>Buttons</h3>

                <p>
                    <a class=\"btn btn--primary full-width\" href=\"#0\">Primary Button</a>
                    <a class=\"btn full-width\" href=\"#0\">Default Button</a>
                    <a class=\"btn btn--stroke full-width\" href=\"#0\">Stroke Button</a>
                </p>

                <h3>Skill Bars</h3>

                <ul class=\"skill-bars\">
                    <li>
                        <div class=\"progress percent90\">
                            <span>90%</span></div>
                        <strong>HTML5</strong>
                    </li>
                    <li>
                        <div class=\"progress percent85\">
                            <span>85%</span></div>
                        <strong>CSS3</strong>
                    </li>
                    <li>
                        <div class=\"progress percent70\">
                            <span>70%</span></div>
                        <strong>JQuery</strong>
                    </li>
                    <li>
                        <div class=\"progress percent95\">
                            <span>95%</span></div>
                        <strong>PHP</strong>
                    </li>
                    <li>
                        <div class=\"progress percent75\">
                            <span>75%</span></div>
                        <strong>Wordpress</strong>
                    </li>
                    <li>
                        <div class=\"progress percent90\">
                            <span>90%</span></div>
                        <strong>Angular JS</strong>
                    </li>
                </ul>

            </div>

        </div> <!-- end row -->

        <div class=\"row half-bottom\">

            <div class=\"col-six tab-full\">

                <h1>H1 Heading</h1>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h2>H2 Heading</h2>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h3>H3 Heading</h3>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

            </div>

            <div class=\"col-six tab-full\">

                <h4>H4 Heading</h4>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h5>H5 Heading</h5>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h6>H6 Heading</h6>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. Voluptas odit at vitae minima.
                    In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

            </div>

        </div>

        <div class=\"row half-bottom\">

            <div class=\"col-twelve\">

                <h3>Stats Tabs</h3>

                <ul class=\"stats-tabs\">
                    <li>
                        <a href=\"#\">1,234
                            <em>Sasuke</em>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">567
                            <em>Hinata</em>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">23,456
                            <em>Naruto</em>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">3,456
                            <em>Kiba</em>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">456
                            <em>Shikamaru</em>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">26
                            <em>Sakura</em>
                        </a>
                    </li>
                </ul>

            </div>

        </div> <!-- end row -->

        <div class=\"row half-bottom\">

            <div class=\"col-six tab-full\">

                <h3>Responsive Image</h3>
                <p><img src=\"";
        // line 332
        echo ($context["theme_url"] ?? null);
        echo "/images/wheel-500.jpg\" srcset=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/wheel-1000.jpg 1000w,
                    ";
        // line 333
        echo ($context["theme_url"] ?? null);
        echo "/images/wheel-500.jpg 500w\" sizes=\"(max-width: 1000px) 100vw, 1000px\" alt=\"\"></p>

            </div>

            <div class=\"col-six tab-full\">

                <h3>Responsive video</h3>

                <div class=\"video-container\">
                    <iframe src=\"http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\"
                            frameborder=\"0\" webkitallowfullscreen=\"webkitallowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\"
                            allowfullscreen=\"allowfullscreen\"></iframe>
                </div>

            </div>

        </div> <!-- end row -->

        <div class=\"row add-bottom\">

            <div class=\"col-twelve\">

                <h3>Tables</h3>
                <p>Be sure to use properly formed table markup with
                    <code>&lt;thead&gt;</code>
                    and
                    <code>&lt;tbody&gt;</code>
                    when building a
                    <code>table</code>.</p>

                <div class=\"table-responsive\">

                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Naruto Uzumaki</td>
                            <td>16</td>
                            <td>Male</td>
                            <td>Konoha</td>
                        </tr>
                        <tr>
                            <td>Sakura Haruno</td>
                            <td>16</td>
                            <td>Female</td>
                            <td>Konoha</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div> <!-- end row -->

        <div class=\"row\">

            <div class=\"col-six tab-full\">

                <h3>Form Styles</h3>

                <form>
                    <div>
                        <label for=\"sampleInput\">Your email</label>
                        <input class=\"full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"sampleInput\">
                    </div>
                    <div>
                        <label for=\"sampleRecipientInput\">Reason for contacting</label>
                        <div class=\"ss-custom-select\">
                            <select class=\"full-width\" id=\"sampleRecipientInput\">
                                <option value=\"Option 1\">Questions</option>
                                <option value=\"Option 2\">Report</option>
                                <option value=\"Option 3\">Others</option>
                            </select>
                        </div>
                    </div>

                    <label for=\"exampleMessage\">Message</label>
                    <textarea class=\"full-width\" placeholder=\"Your message\" id=\"exampleMessage\"></textarea>

                    <label class=\"add-bottom\">
                        <input type=\"checkbox\">
                        <span class=\"label-text\">Send a copy to yourself</span>
                    </label>

                    <input class=\"btn--primary\" type=\"submit\" value=\"Submit\">

                </form>

            </div>

            <div class=\"col-six tab-full\">

                <h3>Alert Boxes</h3>

                <br>

                <div class=\"alert-box alert-box--error hideit\">
                    <p>Error Message. Your Message Goes Here.</p>
                    <i class=\"im im-x-mark alert-box__close\"></i>
                </div> <!-- /error -->

                <div class=\"alert-box alert-box--success hideit\">
                    <p>Success Message. Your Message Goes Here.</p>
                    <i class=\"im im-x-mark alert-box__close\"></i>
                </div> <!-- /success -->

                <div class=\"alert-box alert-box--info hideit\">
                    <p>Info Message. Your Message Goes Here.</p>
                    <i class=\"im im-x-mark alert-box__close\"></i>
                </div> <!-- /info -->

                <div class=\"alert-box alert-box--notice hideit\">
                    <p>Notice Message. Your Message Goes Here.</p>
                    <i class=\"im im-x-mark alert-box__close\"></i>
                </div> <!-- /notice -->

            </div>

        </div> <!-- end row -->

    </section> <!-- end styles -->

    <!-- s-contact ================================================== -->
    <section id=\"contact\" class=\"s-contact target-section\">

        <div class=\"overlay\"></div>

        <div class=\"row narrow section-intro\">
            <div class=\"col-full\">
                <h3>Contact</h3>
                <h1>Say Hello.</h1>

                <p class=\"lead\">
                    Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat
                    cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.
                </p>
            </div>
        </div>

        <div class=\"row contact__main\">
            <div class=\"col-eight tab-full contact__form\">
                <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
                    <fieldset>

                        <div class=\"form-field\">
                            <input name=\"contactName\" type=\"text\" id=\"contactName\" placeholder=\"Name\" value=\"\" minlength=\"2\" required=\"\"
                                   aria-required=\"true\" class=\"full-width\">
                        </div>
                        <div class=\"form-field\">
                            <input name=\"contactEmail\" type=\"email\" id=\"contactEmail\" placeholder=\"Email\" value=\"\" required=\"\" aria-required=\"true\"
                                   class=\"full-width\">
                        </div>
                        <div class=\"form-field\">
                            <input name=\"contactSubject\" type=\"text\" id=\"contactSubject\" placeholder=\"Subject\" value=\"\" class=\"full-width\">
                        </div>
                        <div class=\"form-field\">
                            <textarea name=\"contactMessage\" id=\"contactMessage\" placeholder=\"message\" rows=\"10\" cols=\"50\" required=\"\"
                                      aria-required=\"true\" class=\"full-width\"></textarea>
                        </div>
                        <div class=\"form-field\">
                            <button class=\"full-width btn--primary\">Submit</button>
                            <div class=\"submit-loader\">
                                <div class=\"text-loader\">Sending...</div>
                                <div class=\"s-loader\">
                                    <div class=\"bounce1\"></div>
                                    <div class=\"bounce2\"></div>
                                    <div class=\"bounce3\"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class=\"message-warning\">
                    Something went wrong. Please try again.
                </div>

                <!-- contact-success -->
                <div class=\"message-success\">
                    Your message was sent, thank you!<br>
                </div>

            </div>

            <div class=\"col-four tab-full contact__infos\">
                <h4 class=\"h06\">Phone</h4>
                <p>Phone: (+63) 555 1212<br>
                    Mobile: (+63) 555 0100<br>
                    Fax: (+63) 555 0101
                </p>

                <h4 class=\"h06\">Email</h4>
                <p>someone@holawebsite.com<br>
                    info@holawebsite.com
                </p>

                <h4 class=\"h06\">Address</h4>
                <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA<br>
                    94043 US
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->

";
    }

    public function getTemplateName()
    {
        return "styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 333,  401 => 332,  202 => 136,  139 => 76,  122 => 62,  118 => 61,  89 => 34,  80 => 31,  76 => 30,  72 => 29,  69 => 28,  65 => 27,  54 => 19,  48 => 16,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "styles.html.twig", "/Users/nasheed-x/Documents/GitHub/dharavi.org/user/themes/hola/templates/styles.html.twig");
    }
}