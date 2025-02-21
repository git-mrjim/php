<?php

$books = [
        [
            'name' => 'Book 1',
            'author' => 'Ray Dalio',
            'release_year' => 2014,
            'genre' => 'Business',
            'purchased_url' => 'https://www.amazon.com/33-Laws-Power-Ray-Dalio/dp/0062310089'
        ],
        [
            'name' => 'Book 2',
            'author' => 'Charles Duhigg',
            'release_year' => 2013,
            'genre' => 'Business',
            'purchased_url' => 'https://www.amazon.com/Power-Habit-Charles-Duhigg/dp/0062310089'
        ],
        [
            'name' => 'Book 3',
            'author' => 'Ray Dalio',
            'release_year' => 2008,
            'genre' => 'Business',
            'purchased_url' => 'https://www.amazon.com/7-Habits-Highly-Effective-People/dp/0062310089'
        ],
        [
            'name' => 'Book 4',
            'author' => 'Timothy Ferriss',
            'release_year' => 2012,
            'genre' => 'Business',              
            'purchased_url' => 'https://www.amazon.com/5-Second-Rule-Timothy-Ferriss/dp/0062310089'
        ],
        [
            'name' => 'Book 5',
            'author' => 'Charles Duhigg',
            'release_year' => 2020,
            'genre' => 'Business',
            'purchased_url' => 'https://www.amazon.com/Power-Habit-Charles-Duhigg/dp/0062310089'
        ],
        [
            'name' => 'Book 6',
            'author' => 'Charles Duhigg',
            'release_year' => 2021,
            'genre' => 'Business',
            'purchased_url' => 'https://www.amazon.com/Power-Habit-Charles-Duhigg/dp/0062310089'
        ]
    ];

    for ($i = 0; $i < 244; $i++) {
        $authors = ['Ray Dalio', 'Charles Duhigg', 'Timothy Ferriss', 'James Clear', 'Stephen Covey', 'Brene Brown', 'Malcolm Gladwell', 'Simon Sinek', 'John Maxwell', 'Daniel Pink', 'Cal Newport', 'Angela Duckworth', 'Tony Robbins', 'Robin Sharma', 'Grant Cardone', 'Seth Godin', 'Adam Grant', 'Sheryl Sandberg', 'Eric Ries', 'Chris Voss'];
        $genres = ['Business', 'Self-Help', 'Psychology', 'Productivity', 'Leadership', 'Motivation'];
        $years = [2000, 2005, 2008, 2010, 2012, 2013, 2014, 2016, 2018, 2019, 2020, 2021];
        
        $books[] = [
            'name' => 'Book ' . $i,
            'author' => $authors[array_rand($authors)],
            'release_year' => $years[array_rand($years)],
            'genre' => $genres[array_rand($genres)],
            'purchased_url' => 'https://www.amazon.com/Book-' . $i . '/dp/0062310089'
        ];
        
    }

    function filterByAuthor($books, $author) {
        $filteredBookss = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBookss[] = $book;
            }
        }

        return $filteredBookss;
    }

    function filter($items, $key, $value) {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredBookss[] = $item;
            }
        }

        return $filteredBookss;
    }
