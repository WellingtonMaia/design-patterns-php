<?php

require 'vendor/autoload.php';

use DesignPatterns\Prototype\Author;
use DesignPatterns\Prototype\Page;

/**
 * The client code.
 */
function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);

    $draft2 = clone $draft;
    $draft2->addComment("Bye Bye");
    echo "\n";
    echo 'draft2 is instance of $page = ' . ($draft2 instanceof $page ? "YES\n" : "NO\n");
    echo 'draft2 is instance of $draft = ' . ($draft2 instanceof $draft ? "YES\n" : "NO\n");
    echo 'draft2 is instance of $author = ' . ($draft2 instanceof $author ? "YES\n" : "NO\n");
}

clientCode();