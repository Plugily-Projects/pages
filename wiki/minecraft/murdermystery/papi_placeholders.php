<?php
include_once('../../inc/tracking.php');
include_once("../../inc/json_localization.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../inc/css/markdown.css">
    <link rel="stylesheet" href="https://static.plajer.xyz/css/flags_min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">
</head>
<body>
<?php include('resources/navbar.php'); ?>
<div class="container-fluid pb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1 id="list-of-placeholderapi-s-placeholders"><?php echo localize("Wiki.Global.List-Of-Placeholders"); ?></h1>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Wiki.Global.Placeholder"); ?></th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%murdermystery_kills%</td>
                    <td>Shows your total in-game kills (both innocents kills, murderer kills, detective kills etc.)</td>
                </tr>
                <tr>
                    <td>%murdermystery_deaths%</td>
                    <td>Shows your deaths</td>
                </tr>
                <tr>
                    <td>%murdermystery_games_played%</td>
                    <td>Shows your played games count</td>
                </tr>
                <tr>
                    <td>%murdermystery_wins%</td>
                    <td>Shows your total wins count</td>
                </tr>
                <tr>
                    <td>%murdermystery_loses%</td>
                    <td>Shows your total loses count</td>
                </tr>
                <tr>
                    <td>%murdermystery_highest_score%</td>
                    <td>Shows your highest score points number</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-murder-temp.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/addons.php"><?php echo localize("Wiki.Sidebar.General.Plugin-Addons"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/papi_placeholders.php"><?php echo localize("Wiki.Sidebar.General.PAPI-Placeholders"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/leaderheads_names.php"><s>Leaderheads Statistics</s> <strong>deprecated</strong></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Wiki.Sidebar.Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://tutorial.plajer.xyz"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/configuration.php"><?php echo localize("Wiki.Sidebar.Support.Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Wiki.Sidebar.Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/api.php"><?php echo localize("Wiki.Sidebar.Development-Space.Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/murdermystery"><?php echo localize("Wiki.Sidebar.Development-Space.Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('resources/footer.php'); ?>
</body>
</html>