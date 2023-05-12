<?php

$books = [
        [
            'name' => 'Book name',
            'author' => 'Author Name',
            'releaseYear' => 1968,
            'purchaseURL' => 'some URL'
        ],
                [
            'name' => 'Book name 2',
            'author' => 'Author Name 2',
            'releaseYear' => 1969,
            'purchaseURL' => 'some URL 2'
        ]
    ];

    $filteredBooks = array_filter($books, function($book) {
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2002;
    });

    require "index.view.php";