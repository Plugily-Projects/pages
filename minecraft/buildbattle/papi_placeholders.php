<?php
include_once('../../inc/json_localization.php');
include_once("../../inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../inc/css/markdown.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="../../inc/img/favicon/favicon-mobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../inc/img/favicon/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand" href="#">
        <img src="https://i.imgur.com/gDyj2on.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair wiki
    </a>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <h1 id="list-of-placeholderapi-s-placeholders"><?php echo localize("List-Of-Placeholders"); ?></h1>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Placeholder"); ?></th>
                    <th><?php echo localize("Description"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%buildbattle_blocks_broken%</td>
                    <td>Shows your broken blocks in game</td>
                </tr>
                <tr>
                    <td>%buildbattle_blocks_placed%</td>
                    <td>Shows your placed blocks in game</td>
                </tr>
                <tr>
                    <td>%buildbattle_games_played%</td>
                    <td>Shows your played games count</td>
                </tr>
                <tr>
                    <td>%buildbattle_wins%</td>
                    <td>Shows your total wins count</td>
                </tr>
                <tr>
                    <td>%buildbattle_loses%</td>
                    <td>Shows your total loses count</td>
                </tr>
                <tr>
                    <td>%buildbattle_highest_win%</td>
                    <td>Shows your highest win points number</td>
                </tr>
                <tr>
                    <td>%buildbattle_particles_used%</td>
                    <td>Shows amount of particles you&#39;ve placed</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-battle.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Sidebar-Category-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/index.php"><?php echo localize("Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/free_maps.php"><?php echo localize("Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/addons.php"><?php echo localize("Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/papi_placeholders.php"><?php echo localize("Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Sidebar-Category-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://www.youtube.com/watch?v=UOfrzj0WdzM"><?php echo localize("Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/faq.php"><?php echo localize("Sidebar-FAQ"); ?></a> - <?php echo localize("Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/configuration.php"><?php echo localize("Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Sidebar-Category-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/api.php"><?php echo localize("Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/BuildBattle/"><?php echo localize("Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/buildbattle-1-9-1-13-1.44703/">Build Battle 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>