<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>AwesomeToad Studio</title>
        <!--MOBILE OPTIMIZATION-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="resources/toadsil1.png" type="image/png" />
        <link href="index.css" rel="stylesheet" type="text/css" />
        <link rel='stylesheet' href="navbarstyle.css" type='text/css' media='all' />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type='text/javascript'>
            var index = 0;
            var text = 'AwesomeToad Studio';

            function type() {
                if (index > 6 && index < 12) {
                    document.getElementById('toadpart').innerHTML += text.charAt(index);
                    index += 1;
                }
                else if (index >= 12) {
                    document.getElementById('title2').innerHTML += text.charAt(index);
                    index += 1;
                }
                else {
                    document.getElementById('title1').innerHTML += text.charAt(index);
                    index += 1;
                }
                var t = setTimeout('type()', 100);
            }
        </script>
        <script>
            $(function () {
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 800);
                            return false;
                        }
                    }
                });
            });
        </script>
    </head>

    <body onload="type();">
        <header id="home">
            <h1><span id="title1"></span><span id="toadpart" style="color:lightgreen;"></span><span id="title2"></span></h1>
            <img id="toad" alt="" src="resources/toadsil1.png" style="display:none;" />
        </header>
        <nav id="navbar" class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            <div class="wrap">
                <ul id="menu-main-menui" class="menu genesis-nav-menu menu-primary">
                    <a href="#"><img alt="" src="resources/toadsil1.png" style="width:60px; height:60px; position:absolute; margin-left:-160px; margin-top:12px;" /></a>
                    <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-21"><a href="about.html#aboutus">About</a>
                        <ul class="sub-menu">
                            <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="about.html#objectves">Objectives</a></li>
                            <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="about.html#team">Meet the Team</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-22"><a href="#projects">Projects</a>
                        <ul class="sub-menu">
                            <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="#web-projects">Web</a></li>
                            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="#java-projects">Java</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-23"><a href="#contactus">Contact Us</a></li>
                    <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="join.html" target="apply">Join The Team</a></li>
                </ul>
            </div>
        </nav>
        <section id="projects">
            <h1 id="web-projects"> Web Projects</h1>
            <section class="modulecontainer1">
                <article class="displaymodule">
                    <div class="featured-ribbon">
                        <p>Featured</p>
                    </div>
                    <a href="http://www.bswebdevclub.com" target="link_1">
                        <div id="web1" class="webprojectmodule tagify"></div>
                    </a>
                    <section>
                        <div class="descriptionline">The Web Dev Club</div>
                        <div class="text-part-of-module"> The <a href="http://www.bswebdevclub.com" target="link_1">Web Dev Club</a> is a website built for a school website development club. Its features include:
                            <ul>
                                <li>
                                    HTML/CSS/JS Code Editor
                                </li>
                                <li>
                                    Original Tutorials
                                </li>
                                <li>
                                    Responsive UX-optimized design
                                </li>
                                <li>
                                    Mobile optimization
                                </li>
                                <li>
                                    Login and Account System
                                </li>
                                <li>
                                    Weekly News and Assignment Updates
                                </li>
                                <li>
                                    Gallery of Projects
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/php-logo.png" />
                        <img src="resources/mysql-logo.jpg" />
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/jquery-logo.gif" />
                        <img src="resources/bootstrap-logo.png" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://www.kiva.club" target="link_1">
                        <div id="web2" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">The Kiva Club</div>
                        <div class="text-part-of-module"> The <a href="http://www.kiva.club" target="link_2">Kiva Club</a> is a website built for a school chapter of KIVA, dedicated to microfinance and fundraising. Its features include:
                            <ul>
                                <li>
                                    KIVA mission and objectives
                                </li>
                                <li>
                                    Responsive UX-optimized design
                                </li>
                                <li>
                                    Mobile optimization
                                </li>
                                <li>
                                    Contact Form
                                </li>
                                <li>
                                    News and Updates Framework
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/jquery-logo.gif" />
                        <img src="resources/bootstrap-logo.png" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="#" target="link_3">
                        <div id="web3" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">AwesomeToad Studio</div>
                        <div class="text-part-of-module"><a href="#" target="link_3">AwesomeToad Studio</a> is a web and app development studio focusing on desktop and mobile applications. Our areas of expertise encompass:
                            <ul>
                                <li>
                                    UX and responsive design
                                </li>
                                <li>
                                    UI and graphics
                                </li>
                                <li>
                                    Web development and web apps
                                </li>
                                <li>
                                    Android app development
                                </li>
                                <li>
                                    iOS app development
                                </li>
                                <li>
                                    Java desktop applications
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/jquery-logo.gif" />
                        <img src="resources/bootstrap-logo.png" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://awesometoad-anthonybao.rhcloud.com/youtubedownloader/index.php" target="link_4">
                        <div id="web4" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Youtube Downloader</div>
                        <div class="text-part-of-module"><a href="http://awesometoad-anthonybao.rhcloud.com/youtubedownloader/index.php" target="link_4">Download videos from Youtube!</a> Supported formats:
                            <ul>
                                <li>
                                    MP4
                                </li>
                                <li>
                                    WEBM
                                </li>
                                <li>
                                    X-FLV
                                </li>
                                <li>
                                    3-GPP
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/php-logo.png" />
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://awesometoad-anthonybao.rhcloud.com/rainoffire/index.html" target="link_5">
                        <div id="web5" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Rain of Fire</div>
                        <div class="text-part-of-module"><a href="http://awesometoad-anthonybao.rhcloud.com/rainoffire/index.html" target="link_5">Play a cool survival game (with sound)!</a> Created with:
                            <ul>
                                <li>
                                    HTML5 Canvas
                                </li>
                                <li>
                                    Javascript
                                </li>
                                <li>
                                    jQuery
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/jquery-logo.gif" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://awesome-anthonybao.rhcloud.com/" target="link_6">
                        <div id="web6" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">EliteDrawer 1.0</div>
                        <div class="text-part-of-module"><a href="http://awesome-anthonybao.rhcloud.com/" target="link_6">Draw something cool and share it!</a> Created with:
                            <ul>
                                <li>
                                    HTML5 Canvas
                                </li>
                                <li>
                                    Javascript
                                </li>
                                <li>
                                    jQuery
                                </li>
                                <li>
                                    Node.js
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/fontawesome-logo.svg" />
                        <img src="resources/node.png" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://awesometoad-anthonybao.rhcloud.com/jump.html" target="link_7">
                        <div id="web7" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Jump Game</div>
                        <div class="text-part-of-module"><a href="http://awesometoad-anthonybao.rhcloud.com/jump.html" target="link_7">Jump Game</a> is a simple canvas experiment created as the foundation for a javascript game.
                            <ul>
                                <li>
                                    HTML5 Canvas
                                </li>
                                <li>
                                    Javascript animation
                                </li>
                                <li>
                                    DOM structure
                                </li>
                                <li>
                                    Keylisteners, interactive UI
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                        <img src="resources/jquery-logo.gif" />
                        <img src="resources/fontawesome-logo.svg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="projects/solarsystem/solarsystem.html" target="link_8">
                        <div id="web8" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Solar System</div>
                        <div class="text-part-of-module"><a href="projects/solarsystem/solarsystem.html" target="link_8">Solar System</a> is a pure CSS3 animation of our solar system.
                            <ul>
                                <li>
                                    CSS3 animations
                                </li>
                                <li>
                                    -webkit-animation
                                </li>
                                <li>
                                    -moz-animation
                                </li>
                                <li>
                                    -ms-animation
                                </li>
                                <li>
                                    -o-animation
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                    </div>
                </article>
                <article class="displaymodule">
                    <a href="http://studio-anthonybao.rhcloud.com/tree/tree.html" target="link_9">
                        <div id="web9" class="webprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">The Mother Tree</div>
                        <div class="text-part-of-module"><a href="http://studio-anthonybao.rhcloud.com/tree/tree.html" target="link_9">The Mother Tree</a> is an HTML5 canvas drawing.
                            <ul>
                                <li>
                                    HTML5 Canvas
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module">
                        <img src="resources/apache-logo.png" />
                        <img src="resources/redhat-logo.jpg" />
                    </div>
                </article>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 id="java-projects"> Java Projects</h1>
            <section class="modulecontainer1">
                <article class="displaymodule">
                    <a target="app-link_1">
                        <div id="app1" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Pong Game 1.0</div>
                        <div class="text-part-of-module"><a target="app-link_1">Pong Game 1.0</a> is single and multiplayer desktop game created with StdDraw. Its features include:
                            <ul>
                                <li>
                                    PVP Mode
                                </li>
                                <li>
                                    PVC Mode
                                </li>
                                <li>
                                    Music and Sound Effects
                                </li>
                                <li>
                                    Many Cheats
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/ponggame.jar">Download</a>
                    </div>
                </article>
                <article class="displaymodule">
                    <a target="app-link_2">
                        <div id="app2" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Color Vision Game 1.0</div>
                        <div class="text-part-of-module"><a target="app-link_2">Color Vision Game 1.0</a> is a desktop game created with Java Swing. Its features include:
                            <ul>
                                <li>
                                    Timed Levels
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/colorvisiongame.jar">Download</a>
                    </div>
                </article>
                <article class="displaymodule">
                    <a target="app-link_3">
                        <div id="app3" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Golden Goose</div>
                        <div class="text-part-of-module"><a target="app-link_3">Golden Goose</a> is a desktop game created with Java Swing. It is a logic game that requires serious concentration
                            <ul>
                                <li>
                                    Varying difficulty levels
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/goldengoose.jar">Download</a>
                    </div>
                </article>
                <article class="displaymodule">
                    <a target="app-link_4">
                        <div id="app4" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Histogram Generator</div>
                        <div class="text-part-of-module"><a target="app-link_4">Histogram Generator</a> is a useful desktop histogram tool created with Java Swing. Its features include:
                            <ul>
                                <li>
                                    Data input 
                                </li>
                                <li>
                                    Variable bin sizes 
                                </li>
                                <li>
                                    Adjustable scale
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/histogram.jar">Download</a>
                    </div>
                </article>
                <article class="displaymodule">
                    <a target="app-link_5">
                        <div id="app5" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Prime Number Calculator</div>
                        <div class="text-part-of-module"><a target="app-link_5">Prime Number Calculator</a> is a useful desktop application created with Java Swing and capable of generating hundreds of thousands of prime numbers efficiently. From data input, it can determine:
                            <ul>
                                <li>
                                    How many prime numbers are less than a given number  
                                </li>
                                <li>
                                    The first N prime numbers 
                                </li>
                                <li>
                                    Whether a number is prime
                                </li>
                                <li>
                                    All prime numbers less than a give number
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/primenumbercalculator.jar">Download</a>
                    </div>
                </article>
                <article class="displaymodule">
                    <a target="app-link_6">
                        <div id="app6" class="appprojectmodule"></div>
                    </a>
                    <section>
                        <div class="descriptionline">Party Balls</div>
                        <div class="text-part-of-module"><a target="app-link_6">Party Balls</a> is a desktop application created with Java Swing that allows the user to generate multi-colored bouncing balls on click. They're self-aware!
                            <ul>
                                <li>
                                    Ball generation on click  
                                </li>
                                <li>
                                    Bouncing balls of varying color and size  
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="tech-part-of-module-for-app">
                        <a href="jarfiles/partyballs.jar">Download</a>
                    </div>
                </article>
            </section>
        </section>
        <section id="contactus">
            <h1>Questions or Comments? Get in Touch:</h1>
            <br>
            <section id="form-wrapper1">
                <form action="https://docs.google.com/forms/d/1I9xbsNW4AM3pDcyJZnOLHA8GlevgWvrlSo1zESn09ZM/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
                    <ol role="list" style="padding-left: 0">
                        <div role="listitem">
                            <div dir="auto">
                                <div>
                                    <label for="entry_118973010">
                                        <div>
                                        </div>
                                        <div dir="auto">
                                        </div>
                                    </label>
                                    <input placeholder="Email" type="text" name="entry.118973010" value="" id="entry_118973010" dir="auto" aria-label="  " title="">
                                    <div class="error-message" id="157869054_errorMessage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="listitem">
                            <div dir="auto">
                                <div>
                                    <label for="entry_1857588957">
                                        <div>
                                        </div>
                                    </label>
                                    <textarea placeholder="Message" name="entry.1857588957" rows="8" cols="0" id="entry_1857588957" dir="auto" aria-label="  "></textarea>
                                    <div id="1809344545_errorMessage">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="draftResponse" value="[,,&quot;-9156046703853702213&quot;]">
                            <input type="hidden" name="pageHistory" value="0">
                            <input type="hidden" name="fvv" value="0">
                            <input type="hidden" name="fbzx" value="-9156046703853702213">
                            <div>
                                <table id="navigation-table">
                                    <tbody>
                                        <tr>
                                            <td id="navigation-buttons" dir="ltr">
                                                <br>
                                                <br>
                                                <input type="submit" name="submit" value="Submit" id="ss-submit">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </ol>
                </form>
            </section>
        </section>
        <footer>
            <div>
                <section id="footer-row-wrapper">
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div>
                            <ul class="icons">
                                <li class="icon fa-phone">
                                    (602) 819-5728
                                </li>
                                <li class="icon fa-envelope">
                                    <a href="mailto:anthonybao1999@gmail.com">anthonybao1999@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="icons">
                                <li class="icon fa-github">
                                    <a>Github Repo</a>
                                </li>
                                <li class="icon fa-facebook">
                                    <a>Find us on Facebook</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <br>
            <br>
            <br>
            <p>© Copyright 2015 AwesomeToad Studio. All Rights Reserved.</p>
        </footer>
        <script>
            $(window).load(function() {
                $('#toad').fadeIn(3000);
            });
            var h = window.innerHeight;
            var navpos = h - 94;
            if ($(window).width() > 700) {
                document.getElementById('home').style.height = navpos + 'px';
            }
            var nb = $('#navbar');
            var prj = $('#projects');
            $(window).scroll(function() {
                if ($(window).width() > 700) {
                    if ($(this).scrollTop() > navpos + 19) {
                        nb.addClass('fixed');
                    }
                    else {
                        nb.removeClass('fixed');
                    }
                }
            });
        </script>
    </body>

</html>