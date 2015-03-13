<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("form.twig");
    });

    $app->get("/results", function() use ($app) {
        $entry = new Scrabble;
        $totalscore = $entry->score($_GET["input"]);
        return $app['twig']->render("results.twig", array('points' => $totalscore));
    });
    
    return $app;
?>
