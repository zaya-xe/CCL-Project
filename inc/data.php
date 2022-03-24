<?php 
$catalog = [];
//Books
$catalog[101] = [
	"title" => "A Design Patterns: Elements of Reusable Object-Oriented Software",
	"img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/design_patterns.jpg?alt=media&token=6f12a263-9436-4997-9724-f7346360aa73",
    "genre" => "Tech",
    "format" => "Paperback",
    "year" => 1994,
    "category" => "Books",
    "authors" => [
        "Erich Gamma",
        "Richard Helm",
        "Ralph Johnson",
        "John Vlissides"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '978-0201633610'
];
$catalog[102] = [
    "title" => "Clean Code: A Handbook of Agile Software Craftsmanship",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/clean_code.jpg?alt=media&token=4fa49275-7a9c-47be-9dea-510d8ea065bc",
    "genre" => "Tech",
    "format" => "Ebook",
    "year" => 2008,
    "category" => "Books",
    "authors" => [
        "Robert C. Martin"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '978-0132350884'
];
$catalog[103] = [
    "title" => "Refactoring: Improving the Design of Existing Code",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/refactoring.jpg?alt=media&token=82cb0fe5-b9a6-4dc9-b649-520781786ec7",
    "genre" => "Tech",
    "format" => "Hardcover",
    "year" => 1999,
    "category" => "Books",
    "authors" => [
        "Martin Fowler",
        "Kent Beck",
        "John Brant",
        "William Opdyke",
        "Don Roberts"
    ],
    "publisher" => "Addison-Wesley Professional",
    "isbn" => '978-0201485677'
];
$catalog[104] = [
    "title" => "The Clean Coder: A Code of Conduct for Professional Programmers",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/clean_coder.jpg?alt=media&token=f4e3a638-e742-452c-a16e-7190f8610d65",
    "genre" => "Tech",
    "format" => "Audio",
    "year" => 2011,
    "category" => "Books",
    "authors" => [
        "Robert C. Martin"
    ],
    "publisher" => "Prentice Hall",
    "isbn" => '007-6092046981'
];
//Movies
$catalog[201] = [
    "title" => "Forrest Gump",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/forest_gump.jpg?alt=media&token=ce7bbef6-30b5-4ecd-b1d7-0df896e21a6d",
    "genre" => "Drama",
    "format" => "DVD",
    "year" => 1994,
    "category" => "Movies",
    "director" => "Robert Zemeckis",
    "writers" => [
        "Winston Groom",
        "Eric Roth"
    ],
    "stars" => [
        "Tom Hanks",
        "Rebecca Williams",
        "Sally Field",
        "Michael Conner Humphreys"
    ]
];
$catalog[202] = [
    "title" => "Office Space",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/office_space.jpg?alt=media&token=eb101a4a-7293-4aa8-ac8e-ab8ee3df3a75",
    "genre" => "Comedy",
    "format" => "Blu-ray",
    "year" => 1999,
    "category" => "Movies",
    "director" => "Mike Judge",
    "writers" => [
        "William Goldman"
    ],
    "stars" => [
        "Ron Livingston",
        "Jennifer Aniston",
        "David Herman",
        "Ajay Naidu",
        "Diedrich Bader",
        "Stephen Root"
    ]
];
$catalog[203] = [
    "title" => "The Lord of the Rings: The Fellowship of the Ring",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/lotr.jpg?alt=media&token=b5e79bdd-f5a7-4809-9979-aea41e8ee83f",
    "genre" => "Drama",
    "format" => "Blu-ray",
    "year" => 2001,
    "category" => "Movies",
    "director" => "Peter Jackson",
    "writers" => [
        "J.R.R. Tolkien",
        "Fran Walsh",
        "Philippa Boyens",
        "Peter Jackson"
    ],
    "stars" => [
        "Ron Livingston",
        "Jennifer Aniston",
        "David Herman",
        "Ajay Naidu",
        "Diedrich Bader",
        "Stephen Root"
    ]
];
$catalog[204] = [
    "title" => "The Princess Bride",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/princess_bride.jpg?alt=media&token=92799559-6050-4e8e-a55d-af00421ce74e",
    "genre" => "Comedy",
    "format" => "DVD",
    "year" => 1987,
    "category" => "Movies",
    "director" => "Rob Reiner",
    "writers" => [
        "William Goldman"
    ],
    "stars" => [
        "Cary Elwes",
        "Mandy Patinkin",
        "Robin Wright",
        "Chris Sarandon",
        "Christopher Guest",
        "Wallace Shawn",
        "AndrÃ© the Giant",
        "Fred Savage",
        "Peter Falk",
        "Billy Crystal"
    ]
];
//Music
$catalog[301] = [
    "title" => "Beethoven: Complete Symphonies",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/beethoven.jpg?alt=media&token=a361ac3c-f032-4fac-845c-060f51bf3721",
    "genre" => "Clasical",
    "format" => "CD",
    "year" => 2012,
    "category" => "Music",
    "artist" => "Ludwig van Beethoven"
];
$catalog[302] = [
    "title" => "Elvis Forever",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/elvis_presley.jpg?alt=media&token=43861468-c0c4-467f-b1bd-861b62cf27e3",
    "genre" => "Rock",
    "format" => "Vinyl",
    "year" => 2015,
    "category" => "Music",
    "artist" => "Elvis Presley"
];
$catalog[303] = [
    "title" => "No Fences",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/garth_brooks.jpg?alt=media&token=7753aacf-0138-4de3-a0a3-ab3ad181eabd",
    "genre" => "Country",
    "format" => "Cassette",
    "year" => 1990,
    "category" => "Music",
    "artist" => "Garth Brooks"
];
$catalog[304] = [
    "title" => "The Very Thought of You",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/nat_king_cole.jpg?alt=media&token=7a835f8b-9d85-4870-9f52-11280b331af5",
    "genre" => "Jaz",
    "format" => "MP3",
    "year" => 2008,
    "category" => "Music",
    "artist" => "Nat King Cole"
];

//Games

$catalog[401] = [
    "title" => "Clash Of Clans",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/coclogo.png?alt=media&token=35ec60ba-4b29-47cf-a9f0-210cedbc9523",
    "genre" => "Strategy",
    "year" => 2012,
    "Company" => "Super Cell",
    "Description" => "Clash of Clans is a free-to-play mobile strategy video game developed and published by Finnish game developer Supercell. ",
    "Platform" => "Mobile, PC",
    "Ratings" => "4.6",
    "format" => ".apk",
    "category" => "Games"
];

// $catalog[403] = [
//     "title" => "Clash Of Clans",
//     "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/coclogo.png?alt=media&token=35ec60ba-4b29-47cf-a9f0-210cedbc9523",
//     "genre" => "Strategy",
//     "year" => 2012,
//     "Company" => "Super Cell",
//     "Description" => "Clash of Clans is a free-to-play mobile strategy video game developed and published by Finnish game developer Supercell. ",
//     "Platform" => "Mobile, PC",
//     "Ratings" => "4.6",
//     "format" => ".apk",
//     "category" => "Games"
// ];

// $catalog[404] = [
//     "title" => "Clash Of Clans",
//     "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/coclogo.png?alt=media&token=35ec60ba-4b29-47cf-a9f0-210cedbc9523",
//     "genre" => "Strategy",
//     "year" => 2012,
//     "Company" => "Super Cell",
//     "Description" => "Clash of Clans is a free-to-play mobile strategy video game developed and published by Finnish game developer Supercell. ",
//     "Platform" => "Mobile, PC",
//     "Ratings" => "4.6",
//     "format" => ".apk",
//     "category" => "Games"
// ];
