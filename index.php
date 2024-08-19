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
<?php
$data = [
    [
        "position" => 6,
        "url" => "https =>//www.footlocker.com/category/brands/nike.html",
        "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
        "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
      ],
      [
        "position" => 7,
        "url" => "https =>//stockx.com/nike",
        "title" => "Buy Nike Shoes & New Sneakers - StockX",
        "description" => "Buy and sell Nike shoes at the best price on StockX, the live marketplace for StockX Verified Nike sneakers and other popular new releases."
      ],
      [
        "position" => 8,
        "url" => "https =>//play.google.com/store/apps/details?id=com.nike.omega&hl=en_US&gl=US",
        "title" => "Nike => Shoes, Apparel & Stories - Apps on Google Play",
        "description" => "Shop all perfect gifts for sport and style this Nike holiday season. Nike Member Exclusive products, end of year deals, and more - shop and ..."
      ],
      [
        "position" => 9,
        "url" => "https =>//de-de.facebook.com/nike/",
        "title" => "Nike - Home | Facebook",
        "description" => "Nike, Beaverton, OR. 36093752 likes · 306235 talking about this · 7259 were here. Just Do It."
      ],
      [
        "position" => 10,
        "url" => "https =>//www.linkedin.com/company/nike",
        "title" => "Nike - LinkedIn",
        "description" => "NIKE, Inc., named for the Greek goddess of victory, is the world's leading designer, marketer, and distributor of authentic athletic footwear, apparel, ..."
      ]
]
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