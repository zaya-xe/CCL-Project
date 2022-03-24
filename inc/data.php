<?php 
$catalog = [];
//Books

define('DB_SERVER', 'testccl.cizkj1gldurq.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'adminadmin');
define('DB_DATABASE', 'cats');

$conn = new mysqli('testccl.cizkj1gldurq.us-east-1.rds.amazonaws.com', 'admin', 'adminadmin', 'Cats') or die(mysql_error());








$catalog[101] = [
	"title" => "The Monk Who Sold His Ferrari",
	"img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/monkwhosold.png?alt=media&token=4a2acc73-48ed-442a-815d-e42bb900bb27",
    "genre" => " Fiction",
    "format" => "Paperback",
    "year" => 1999,
    "category" => "Books",
    "authors" => [
        "Robin Sharma",
    ],
    "publisher" => "HarperSanFrancisco",
    "isbn" => '978-0002008594'
];
$catalog[102] = [
    "title" => "2 States: The Story Of My Marriage",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/2states.jpg?alt=media&token=d52a4793-e740-4571-a8ad-a595b394a61a",
    "genre" => "Fiction, Romance",
    "format" => "Paperback",
    "year" =>  2009,
    "category" => "Books",
    "authors" => [
        "Chetan Bhagat"
    ],
    "publisher" => "Rupa Publications Pvt. Ltd",
    "isbn" => '978-8129115300'
];
$catalog[103] = [
    "title" => " Wings of Fire",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/wingsoffire.jpg?alt=media&token=f02b4a4e-8990-4371-a051-cbcab89951c2",
    "genre" => "Autobiography",
    "format" => "Paperback",
    "year" => 1999,
    "category" => "Books",
    "authors" => [
        "A P J Abdul Kalam",
        "Arun Tiwari",
    ],
    "publisher" => "Universities Press",
    "isbn" => '	817-3711461'
];
$catalog[104] = [
    "title" => "Gitanjali",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/gitanjali.jpg?alt=media&token=f108d7e0-2894-4ebc-9fdd-ddbc1aab2071",
    "genre" => "Poem",
    "format" => "Ebook",
    "year" =>1910,
    "category" => "Books",
    "authors" => [
        "Rabindranath Tagore"
    ],
    "publisher" => "Simon & Schuster",
    "isbn" => '978-9392468148'
];
//Movies
$catalog[201] = [
    "title" => "Gully Boy",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/gullyboy.jpg?alt=media&token=2bb5ba15-3e9c-418f-bd08-4615d402f8a7",
    "genre" => "Musical/Romance",
    "format" => "DVD",
    "year" => 2019,
    "category" => "Movies",
    "director" => "Zoya Akhtar",
    "writers" => [
        "Reema Kagti",
        "Vijay Maurya",
    ],
    "stars" => [
        "Ranveer Singh",
        "Alia Bhatt",
"       Siddhant Chaturvedi",
    ]
];
$catalog[202] = [
    "title" => "Baahubali: The Beginning",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/bahubali.jpg?alt=media&token=f0f452f6-ab94-4ce8-b49f-0e9946a2376d",
    "genre" => "Action, Drama,Romance,Fantasy,Historical Fiction,War,Adventure",
    "format" => "Blu-ray",
    "year" => 2015,
    "category" => "Movies",
    "director" => "S.S. Rajamouli",
    "writers" => [
        "Vijayendra Prasad",
        "C.H. Vijay Kumar",
    ],
    "stars" => [
        "Prabhas",
        "Rana Daggubati",
        "Ramya Krishnan",
        "Sathyaraj",
        "Anushka Shetty",
        "Tamannaah Bhatia"
    ]
];
$catalog[203] = [
    "title" => "3 Idiots",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/3idiots.jpg?alt=media&token=802a8649-8be8-42d9-b5d9-08a011ce6b0b",
    "genre" => "Drama, Comedy,Romance",
    "format" => "Blu-ray",
    "year" => 2009,
    "category" => "Movies",
    "director" => "Rajkumar Hirani",
    "writers" => [
        "Rajkumar Hirani",
        "Abhijat Joshi",
    ],
    "stars" => [
        "Aamir Khan",
        "R. Madhavan",
        "Sharman Joshi",
        "Omi Vaidya",
        "Boman Irani",
        "Kareena Kapoor"
    ]
];
$catalog[204] = [
    "title" => "Sholay",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/sholay.jpg?alt=media&token=f33319e0-cf22-48f9-b875-c49e10c41862",
    "genre" => "Action,Drama,Comedy",
    "format" => "DVD",
    "year" => 1975,
    "category" => "Movies",
    "director" => "Ramesh Sippy",
    "writers" => [
        " Salim Khan",
        "Javed Akhtar"
    ],
    "stars" => [
        "Sanjeev Kumar",
        "Dharmendra",
        "Amitabh Bachchan",
        "Amjad Khan",
        "Hema Malini",
        "Jaya Bachchan",
    ]
];
//Music
$catalog[301] = [
    "title" => "Likhe Jo Khat Tujhe ",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/likhejo.jpg?alt=media&token=ae645849-7b15-438a-8b44-dc68d79c8293",
    "genre" => "Indian Film Pop",
    "format" => "CD",
    "year" => 1968,
    "category" => "Music",
    "artist" => "Mohammed Rafi"
];
$catalog[302] = [
    "title" => "O Humdum",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/ohumdum.jpg?alt=media&token=db72cd39-e36a-484a-a298-81733731b6ea",
    "genre" => "Indian Film Pop",
    "format" => "CD",
    "year" => 2009,
    "category" => "Music",
    "artist" => " A. R. Rahman"
];
$catalog[303] = [
    "title" => "Nadaan Parinde",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/nadanparindey.jpg?alt=media&token=a9f58d3b-9684-4b9f-8aab-118984111cb2",
    "genre" => "Indian Film Pop",
    "format" => "CD",
    "year" => 2011,
    "category" => "Music",
    "artist" => "A. R. Rahman"
];
$catalog[304] = [
    "title" => "Jugnu",
    "img" => "https://firebasestorage.googleapis.com/v0/b/phpwebsite-17ea6.appspot.com/o/jugnu.jpg?alt=media&token=6ac22820-a29a-4fa5-ad85-51c1597fec01",
    "genre" => "Indian Pop",
    "format" => "MP3",
    "year" => 2022,
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
