<?php

$scriptsFoot = $helper->scriptsFoot();

$head = $helper->metas()
      . $helper->links()
      . $helper->styles()->add(asset(elixir('css/app.css')))
      . $helper->scripts();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipe Block</title>
        <link rel="apple-touch-icon-precomposed"
              sizes="144x144" href="/assets/ico/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed"
              sizes="114x114" href="/assets/ico/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed"
              sizes="72x72" href="/assets/ico/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed"
              sizes="57x57" href="/assets/ico/apple-touch-icon-57x57.png" />
        <link rel="icon" href="/assets/ico/favicon.ico" />
        <link rel="shortcut icon" href="/assets/ico/favicon.ico" />
        <?php echo $head; ?>
    </head>

    <body>

        <div id="wrapper">

            @include('layouts._nav')

            <div id="primary-content">
                @include('flash::message')
                @yield('content')
            </div>

        </div>

        <div class="footer">
            <div class="container">

                <div class="copyright license">
                    <div id="vcard-uphys" class="vcard">
                        &copy;<?php echo date('Y'); ?>&nbsp;
                        <span class="fn org">
                            <a class="url" href="/">
                                Recipe Block
                            </a>
                        </span>
                        <br />
                        All Rights Reserved.
                    </div>
                </div>

                @if( ! Auth::check() )
                <a href="/login">Login</a>
                @else
                <a href="/dashboard">Dashboard</a> |
                <a href="/logout">Logout</a>
                @endif

                <div class="social-follow">
                    <ul>
                        <li><a href="#" title="Facebook">
                                <i class="fa fa-facebook">
                                    <span>Facebook</span>
                                </i>
                            </a>
                        </li>
                        <li><a href="#" title="Twitter">
                                <i class="fa fa-twitter">
                                    <span>Twitter</span>
                                </i>
                            </a>
                        </li>
                        <li><a href="#" title="YouTube">
                                <i class="fa fa-youtube">
                                    <span>YouTube</span>
                                </i>
                            </a>
                        </li>
                        <li><a href="#" title="Instagram">
                                <i class="fa fa-instagram">
                                    <span>Instagram</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Scripts -->
        <?php echo $scriptsFoot; ?>
        @section('scripts')
        @show

    </body>
</html>
