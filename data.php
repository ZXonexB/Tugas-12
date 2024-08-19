<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-decoration: none;
    }

    th, td {
        border: 1px solid #333;
        padding: 5px;
    }

    th {
        background-color: #CABCBC;
    }

    td {
        background-color: #E4D9D9;
    }

    .tombol {
      display: flex;
      justify-content: left;
      align-items: center;
    }

    div a {
      border: 1px solid #333;
      padding: 4px 6px;
      margin-left: 3px;
      text-decoration: none;
    }
</style>
<body>
<?php
$data = [
  [
    "position" => 1,
    "url" => "https =>//www.nike.com/",
    "title" => "Nike. Just Do It. Nike.com",
    "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
  ],
  [
    "position" => 2,
    "url" => "https =>//www.instagram.com/nike/?hl=de",
    "title" => "Nike (@nike) • Instagram photos and videos",
    "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
  ],
  [
    "position" => 3,
    "url" => "https =>//twitter.com/nike",
    "title" => "Nike - Twitter",
    "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
  ],
  [
    "position" => 4,
    "url" => "https =>//en.wikipedia.org/wiki/Nike,_Inc.",
    "title" => "Nike, Inc. - Wikipedia",
    "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
  ],
  [
    "position" => 5,
    "url" => "https =>//www.youtube.com/user/nike",
    "title" => "Nike - YouTube",
    "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
  ],
];
?>
<table>
        <thead>
            <tr>
                <th>Position</th>
                <th>URL</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
            <tr>
                <td><?php echo $row["position"]; ?></td>
                <td><a href="<?php echo $row["url"]; ?>" target="_blank"><?php echo $row["url"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br>
<div class="tombol">
<div><a href="data.php">1</a></div>
<div><a href="index.php">2</a></div>
</div>
</body>
</html>

