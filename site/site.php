<?php

$login = "";
$password = "";


if (isset($_GET['login'])) {
    $login = $_GET['login'];
}
if (isset($_GET['password'])) {
    $password = ($_GET['password']);
}

$auth = false;

if ($login && $password) {
    $connect = mysqli_connect("127.0.0.1", "root", "", "site") or die (mysqli_error($connect));
    $query = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
    $query = mysqli_query($connect, $query);
    if (mysqli_num_rows($query) < 1) {
        echo "Вы ввели неправильный логин или пароль";
    } else $auth = true;
    if ($connect) {
        mysqli_close($connect);
    }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Welcome | OBS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="OBS (Open Broadcaster Software) is free and open source software for video recording and live streaming. Stream to Twitch, YouTube and many other providers or record your own videos with high quality H264 / AAC encoding.">
    <meta name="keywords" content="OBS, OBS Studio, Stream, Video, Live Streaming, Recording, Games, Twitch, YouTube, Livestream, Open Broadcaster Software">
    <!--<link rel="preload" href="/assets/fonts/open-sans-v18-latin-ext_latin_cyrillic-regular.woff2" as="font" type="font/woff2" crossorigin>-->
    <link href="https://obsproject.com/assets/css/blurple.min.css?20220901-1" rel="stylesheet">    <link rel="alternate" type="application/rss+xml" title="RSS Feed obsproject.com" href="/blog/rss">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="alternate" hreflang="cs" href="https://obsproject.com/cs/welcome">
    <link rel="alternate" hreflang="da" href="https://obsproject.com/da/welcome">
    <link rel="alternate" hreflang="de" href="https://obsproject.com/de/welcome">
    <link rel="alternate" hreflang="en" href="https://obsproject.com/welcome">
    <link rel="alternate" hreflang="es" href="https://obsproject.com/es/welcome">
    <link rel="alternate" hreflang="eu" href="https://obsproject.com/eu/welcome">
    <link rel="alternate" hreflang="fi" href="https://obsproject.com/fi/welcome">
    <link rel="alternate" hreflang="fr" href="https://obsproject.com/fr/welcome">
    <link rel="alternate" hreflang="hu" href="https://obsproject.com/hu/welcome">
    <link rel="alternate" hreflang="ja" href="https://obsproject.com/ja/welcome">
    <link rel="alternate" hreflang="ko" href="https://obsproject.com/ko/welcome">
    <link rel="alternate" hreflang="pt-br" href="https://obsproject.com/pt-br/welcome">
    <link rel="alternate" hreflang="ru" href="https://obsproject.com/ru/welcome">
    <link rel="alternate" hreflang="sv" href="https://obsproject.com/sv/welcome">
    <link rel="alternate" hreflang="tr" href="https://obsproject.com/tr/welcome">
    <link rel="alternate" hreflang="uk" href="https://obsproject.com/uk/welcome">
    <link rel="alternate" hreflang="zh-cn" href="https://obsproject.com/zh-cn/welcome">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34644124-1"></script>

</head>

<body class="">

<div id="wrapper">

    <header id="header" class="cf">
        <a class="logo" href="https://obsproject.com">
            <img src="/assets/images/new_icon_small-r.png" alt="OBS" />
        </a>

        <div class="header_title">
            <div class="header_title_main">OBS</div>
            <div class="header_subtitle">Open Broadcaster Software<span class="smalltext">®️</span></div>
        </div>

        <div id="SocialButtons">

            <div id="DiscordButton">
                <a href="https://discord.gg/obsproject" target="_blank" aria-label="OBS Discord">
                    <img src="/assets/images/Discord.svg" class="icon-discord" />
                </a>
                <span class="tooltip">Discord</span>
            </div>

            <div id="TwitterButton">
                <a href="https://twitter.com/OBSProject" target="_blank" aria-label="OBS Twitter">
                    <i class="icon-twitter"></i>
                </a>
                <span class="tooltip">Twitter</span>
            </div>

            <div id="GitHubButton">
                <a href="https://github.com/obsproject/obs-studio" target="_blank" aria-label="OBS Studio GitHub">
                    <i class="icon-github"></i>
                </a>
                <span class="tooltip">GitHub</span>
            </div>
            <!--
                    <div id="BlogButton">
                        <a href="https://obsproject.com/blog">
                            <i class="icon-blog">Blog</i>
                        </a>
                    </div>
                    
                    <div id="LivechatButton">
                        <a href="https://obsproject.com/chat" target="_blank">
                            <i class="icon-comment">Community Chat</i>
                        </a>
                    </div>
            -->

            <div id="ContributeButton">
                <a href="https://obsproject.com/contribute">
                    <i class="icon-heart">Contribute</i>
                </a>
            </div>

        </div>

        <nav>

            <ul class="menu cf">
                <li>
                <form action="site.php" method="get">
                Login<input type="text" id="login" name="login">
                Password<input type="text" id="password" name="password">
                <input type="submit" value="LOGIN">
                </form>
                </li>

                <li>
                    <?php if ($auth) echo '<a href="https://obsproject.com">Home</a>'; ?>
                </li>
                <li>
                    <a  href="https://obsproject.com/download">Download</a>


                </li>
                <li>
                    <a  href="/forum/">Forum</a>


                </li>
                <li>
                    <form method="GET" action="registration.php">
                        <a href="registration.php">Registration</a>
                    </form>

                </li>
            </ul>

        </nav>

    </header>


    <div class="pagewidth">

        <div class="headerpusher"></div>

        <div class="small_width">
            <h1>Thank you for downloading OBS Studio!</h1>


            <h5>Getting Started</h5>

            <ul class="portal_list">
                <li class="portal_item">

                    <div class="portal_title"><i class="icon-power"></i></div>
                    <div class="portal_info">
                        <p><p>If you are brand new to using OBS please check out the <strong><a href="https://obsproject.com/wiki/OBS-Studio-Quickstart">OBS Studio Quickstart Guide</a></strong>. It can get you up and running in 4 easy steps!</p></p>
                    </div>
                </li>

                <li class="portal_item">

                    <div class="portal_title"><i class="icon-book"></i></div>
                    <div class="portal_info">
                        <p><p>The <strong><a href="https://obsproject.com/wiki/OBS-Studio-Overview">OBS Studio Overview</a></strong> is a more detailed breakdown of the features in OBS Studio for new and veteran users alike.</p></p>
                    </div>
                </li>

                <li class="portal_item">

                    <div class="portal_title"><i class="icon-bubbles"></i></div>
                    <div class="portal_info">
                        <p><p>You can visit the <strong><a href="https://obsproject.com/forum/">Forums</a></strong> and <strong><a href="https://obsproject.com/discord">Community Discord</a></strong> with any questions or issues you have.</p></p>
                    </div>
                </li>

                <li class="portal_item">

                    <div class="portal_title"><i class="icon-question"></i></div>
                    <div class="portal_info">
                        <p><p>All of these resources along with Frequently Asked Questions are available via the <strong><a href="https://obsproject.com/help">Help portal</a></strong> in the top navigation bar.</p></p>
                    </div>
                </li>

                <li class="portal_item">

                    <div class="portal_title"><i class="icon-heart"></i></div>
                    <div class="portal_info">
                        <p><p>Looking for ways to give back? Check out <strong><a href="https://obsproject.com/contribute">Contributing to the OBS Project</a></strong> to see ways you can support our work.</p></p>
                    </div>
                </li>
            </ul>

            <br />

            <h5><p>Latest Updates</p></h5>
            <div class="welcome_item">
                <h1>OBS Studio 28</h1>
                <div><h2>WARNING!</h2>
                    <p>Some plugins may not be compatible with OBS 28. You can check the status of the most common plugins on the <a href="https://obsproject.com/kb/obs-studio-28-plugin-compatibility" rel="noopener noreferrer" target="_blank">OBS Plugin Compatibility</a> page.</p>
                    <h2>Anniversary Update</h2>
                    <p>Welcome to OBS Studio 28, celebrating the 10th anniversary of OBS! 10 years ago, the <a href="https://www.reddit.com/r/starcraft/comments/z58e9/i_made_a_streaming_application_so_i_could_stream/" rel="noopener noreferrer" target="_blank">first version of OBS</a> was released by Jim. Today, we have hundreds of contributors and countless users. Were very grateful for all the support, and were happy that so many people find it useful! This release comes with a ton of new features, all of which can be found in the <a href="https://github.com/obsproject/obs-studio/releases/tag/28.0.0" target="blank">release notes</a>, but weve highlighted a few here.</p>
                    <h2>HDR Support</h2>
                    <p>First, and probably the biggest change, is that we now have HDR support! You can play games in HDR and OBS will automatically tonemap the content to SDR. If you want to capture and record HDR content, this is now possible with the appropriate HDR settings. See the <a href="https://github.com/obsproject/obs-studio/releases/tag/28.0.0" target="blank">release notes</a> for a basic overview and how to set OBS correctly for HDR.</p>
                    <h2>Native Apple Silicon Support</h2>
                    <p>For our Apple M1/M2 users, native Apple Silicon support is here! OBS is now available as an ARM64 app for macOS, running without Rosetta. Also available for our Apple friends on macOS 12.5+ is the new ScreenCaptureKit, which improves the experience in capturing both individual windows and the display. For those on macOS 13+, direct audio capture is also available.</p>
                    <h2>New NVIDIA Background Removal and Noise Suppression features</h2>
                    <p>NVIDIA Background Removal is now available for RTX GPUs on Windows. This allows you to remove the background from your camera without a physical greenscreen.</p>
                    <p>Weve also added the Room Echo Removal feature from the <a href="https://www.nvidia.com/en-us/geforce/broadcasting/broadcast-sdk/resources/">NVIDIA Broadcast Audio Effects SDK</a> to the Noise Suppression filter.</p>
                    <h2>New AMD Encoder</h2>
                    <p>We’ve added a new, more efficient and up-to-date implementation of the AMD encoder on Windows. This update improves performance and provides access to new encoder features.</p>
                    <h2>OBS Websockets 5</h2>
                    <p>A long time coming, obs-websocket is now part of OBS as a first-party plugin! This makes it easier to get up and running with tools that interact with obs-websocket. You can find more information here: <a href="https://obsproject.com/blog/obs-studio-and-obs-websocket-join-forces" rel="noopener noreferrer" target="_blank">obsproject.com/blog/obs-studio-and-obs-websocket-join-forces</a></p>
                    <h2>Thank you for the 10 years of support!</h2>
                    <p>If you would like to support the OBS Project, please consider contributing to our <a href="https://patreon.com/obsproject" rel="noopener noreferrer" target="_blank">Patreon</a> or <a href="https://opencollective.com/obsproject" rel="noopener noreferrer" target="_blank">Open Collective</a>!</p></div>
            </div>

        </div>

    </div>


    <div class="footer_push"></div>
</div>
<!-- End Wrapper -->

<footer id="footer" class="footer cf">
    <div class="footer_extra">
        <div class="footer_left">
            <div class="footer_row">
                <div class="logo"><img src="/assets/images/new_icon_small-r.png"></div>
                <div class="footer_title">OBS Project</div>
            </div>
            <div class="footer_row footer_social">
                <a href="https://twitter.com/OBSProject" target="_blank" aria-label="OBS Twitter">
                    <i class="icon-twitter"></i>
                </a>
                <a href="https://facebook.com/OpenBroadcasterSoftware" target="_blank" aria-label="OBS Facebook">
                    <i class="icon-facebook"></i>
                </a>
                <a href="/discord" target="_blank" aria-label="OBS Discord">
                    <img src="/assets/images/Discord.svg" class="icon-discord">
                </a>
                <a href="https://github.com/obsproject/obs-studio" target="_blank" aria-label="OBS GitHub">
                    <i class="icon-github"></i>
                </a>
            </div>
        </div>
        <div class="footer_right">

            <!-- App -->
            <div class="footer_items"><div class="footer_category">OBS Studio</div>
                <a href="/download" aria-label="Download">Download</a>
                <a href="https://ideas.obsproject.com/" target="_blank" aria-label="Feature suggestions">Ideas</a>
                <a href="/privacy-policy" aria-label="Privacy Policy">Privacy Policy</a>
            </div>

            <!-- Contribute -->
            <div class="footer_items"><div class="footer_category">Contribute</div>
                <a href="https://github.com/obsproject/obs-studio" target="_blank" aria-label="OBS GitHub">GitHub</a>
                <a href="https://opencollective.com/obsproject" aria-label="OBS on Open Collective">Open Collective</a>
                <a href="https://www.patreon.com/obsproject/overview" aria-label="OBS on Patreon">Patreon</a>
            </div>

            <!-- Help -->
            <div class="footer_items"><div class="footer_category">Support</div>
                <a href="/help" aria-label="Help Portal">Help Portal</a>
                <a href="/forum/" aria-label="Forums">Forums</a>
                <a href="/discord" aria-label="Official Discord">Discord</a>
                <a href="/wiki" aria-label="Support Wiki">Wiki</a>
            </div>

        </div>
    </div>

    <div class="copyright">
        <p>© 2012 - 2022. OBS and OBS Studio are created and maintained by Jim. Development by <a href="https://github.com/obsproject/OBS-studio/graphs/contributors">OBS Studio Contributors</a>.<br />
            Website designed and created by <a href="https://twitter.com/Warchamp7">Warchamp7</a>, powered by <a href="https://getkirby.com/made-with-kirby-and-love">Kirby CMS</a>. Downloads powered by <a href="https://fastly.com">Fastly</a>.</p>    </div>
    <br>
    <div class="languages" arial-label="Select Language">
        <p>
            <a href="https://obsproject.com/cs/welcome">Čeština</a>
            <a href="https://obsproject.com/da/welcome">Dansk</a>
            <a href="https://obsproject.com/de/welcome">Deutsch</a>
            <a href="https://obsproject.com/es/welcome">Español</a>
            <a href="https://obsproject.com/eu/welcome">Euskara</a>
            <a href="https://obsproject.com/fi/welcome">Suomi</a>
            <a href="https://obsproject.com/fr/welcome">Français</a>
            <a href="https://obsproject.com/hu/welcome">Magyar</a>
            <a href="https://obsproject.com/ja/welcome">日本語</a>
            <a href="https://obsproject.com/ko/welcome">한국어</a>
            <a href="https://obsproject.com/pt-br/welcome">Português do Brasil</a>
            <a href="https://obsproject.com/ru/welcome">ру́сский</a>
            <a href="https://obsproject.com/sv/welcome">Svenska</a>
            <a href="https://obsproject.com/tr/welcome">Türkçe</a>
            <a href="https://obsproject.com/uk/welcome">українська</a>
            <a href="https://obsproject.com/zh-cn/welcome">中文(简体)</a>
        </p>
    </div>

</footer>
</body>
</html>


