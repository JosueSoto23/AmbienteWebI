<?php

function getConnection()
{

  $conex = mysqli_connect("localhost", "root", "", "primerproyecto");

  if ($conex->connect_errno) {
    printf("Failed to connect the database!: %s\n", $conex->connect_error);
    die;
  }
  return $conex;
}

function userAuthentication($email, $pass)
{
  $conex = getConnection();
  $sql = "SELECT * FROM Users WHERE email = '$email' and pass = '$pass'";
  $result = $conex->query($sql);

  if ($conex->connect_errno) {
    $conex->close();
    return false;
  }
  $conex->close();
  return $result->fetch_array();
}

function saveRSS($rss, $id_newssource, $user_id, $category)
{
  $news = simplexml_load_file($rss);

  $i = 0;
  if (!empty($news)) {

    $site = $news->channel->title;
    $sitelink = $news->channel->link;

    foreach ($news->channel->item as $item) {

      $title = $item->title;
      $desc = $item->description;
      $link = $item->link;
      $postDate = $item->pubDate;
      $pubDate = date("Y-m-d H:i:s", strtotime($postDate));

      $insert = "INSERT INTO news VALUES ('', '$title', '$desc', '$link', '$pubDate', '$id_newssource', '$user_id', '$category') ";

      $con = getConnection();
      $consult = mysqli_query($con, $insert);

      if ($i >= 16) {
        break;
      }
      $i++;
    }
  }
}
