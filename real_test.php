<?php

require_once 'lib/Statsd.php';

$connection = new StatsdSocket('localhost',8125);
$statsd = new StatsdClient($connection,'akick.test');

$statsd->setNamespace("test");

// simple counts
$statsd->increment("foo.bar");
$statsd->decrement("foo.bar");
$statsd->count("foo.bar", 1000);