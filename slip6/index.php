<?php

$books = simplexml_load_file("book.xml");

if ($books === false) {
    die("xml file not load");
}

foreach ($books->book as $book) {
    echo " Title : {$book->title} <br> ";
    echo " Author : {$book->author} <br> ";
    echo " Published_year : {$book->published_year} <br> ";
    echo " Price : {$book->price} <br> ";
}
