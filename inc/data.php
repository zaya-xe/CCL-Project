<?php 
$catalog = [];
//Books

define('DB_SERVER', 'miniprojccl.cizkj1gldurq.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'adminadmin');
define('DB_DATABASE', 'Cats');

$conn = new mysqli('miniprojccl.cizkj1gldurq.us-east-1.rds.amazonaws.com', 'admin', 'adminadmin', 'Cats') or die(mysql_error());

$sql = "SELECT * FROM Books";
$sql2 = "SELECT * FROM Movies";
$sql3 = "SELECT * FROM Music";
$sql4 = "SELECT * FROM Games";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);

while($line=mysqli_fetch_array($result)) {    
$catalog[$line['id']]=array('title'=>$line['title'],'img'=>$line['img'],'genre'=>$line['genre'],'format'=>$line['format'],'year'=>$line['year'],'category'=>$line['category'],'authors'=>$line['authors'],'publisher'=>$line['publisher'],'isbn'=>$line['isbn']);
}

while($line=mysqli_fetch_array($result2)) {    
    $catalog[$line['id']]=array('title'=>$line['title'],'img'=>$line['img'],'genre'=>$line['genre'],'format'=>$line['format'],'year'=>$line['year'],'category'=>$line['category'],'director'=>$line['director'],'writers'=>$line['writers'],'stars'=>$line['stars']);
    }

while($line=mysqli_fetch_array($result3)) {    
    $catalog[$line['id']]=array('title'=>$line['title'],'img'=>$line['img'],'genre'=>$line['genre'],'format'=>$line['format'],'year'=>$line['year'],'category'=>$line['category'],'artist'=>$line['artist']);
    }

while($line=mysqli_fetch_array($result4)) {    
    $catalog[$line['id']]=array('title'=>$line['title'],'img'=>$line['img'],'genre'=>$line['genre'],'year'=>$line['year'],'company'=>$line['company'],'Description'=>$line['Description'],'platform'=>$line['platform'],'ratings'=>$line['ratings'],'format'=>$line['format'],'format'=>$line['format'],'category'=>$line['category']);
    }

