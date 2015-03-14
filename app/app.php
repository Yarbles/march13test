<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("form.twig");
    });

    $app->get("/results", function() use ($app) {
        $entry = new RepeatCounter;
        $matches = $entry->countRepeats($_GET["input"], $_GET["input2"]);
        return $app['twig']->render("results.twig", array('matches' => $matches));
    });

    return $app;
?>
