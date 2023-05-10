<?php
include_once'Product.php';
include_once'CDMusic.php';
include_once'CDRack.php';
$Product=new product("produk 1", 10000, 5000);
$CDMusic=new CDMusic("CD Musik 1", 10000, 5000, "budi", "pop");
$CDRack= new CDRack("CD Rak 1", 10000, 5000, 100, "Anywhere");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance OOP</title>
</head>
<body>
    <h4>Class Product</h4>
    <?php echo "<table>
    <tr>
        <th>
        Nama Produk:
        </th>
        <td>"
        .$Product->getName().
        "</td>
    </tr> 
    <tr>
        <th>
        Harga Produk:
        </th>
        <td>"
        .$Product->getPrice().
        "</td>
    </tr> 
    <tr>
        <th>
        Discount Produk:
        </th>
        <td>"
        .$Product->getdiscount().
        "</td>
    </tr> 
</table>";
?><br>
    <h4>Class CDMusic</h4>
<?php echo "<table>
    <tr>
        <th>
        Nama Produk:
        </th>
        <td>"
        .$CDMusic->getName().
        "</td>
    </tr> 
    <tr>
        <th>
        Harga Produk:
        </th>
        <td>"
        .$CDMusic->getPrice().
        "</td>
    </tr> 
    <tr>
        <th>
        Discount Produk:
        </th>
        <td>"
        .$CDMusic->getdiscount().
        "</td>
    </tr> 
    <tr>
        <th>
        Nama Artis:
        </th>
        <td>"
        .$CDMusic->getArtist().
        "</td>
    </tr> 
    <tr>
        <th>
        Genre Lagu:
        </th>
        <td>"
        .$CDMusic->getGenre().
        "</td>
    </tr> 
</table>";?>
<br>
<h4>Class CDRack</h4>
<?php echo "<table>
    <tr>
        <th>
        Nama Produk:
        </th>
        <td>"
        .$CDRack->getName().
        "</td>
    </tr> 
    <tr>
        <th>
        Harga Produk:
        </th>
        <td>"
        .$CDRack->getPrice().
        "</td>
    </tr> 
    <tr>
        <th>
        Discount Produk:
        </th>
        <td>"
        .$CDRack->getdiscount().
        "</td>
    </tr> 
    <tr>
        <th>
        Kapasitas Produk:
        </th>
        <td>"
        .$CDRack->getCapacity().
        "</td>
    </tr> 
    <tr>
        <th>
        Model Produk:
        </th>
        <td>"
        .$CDRack->getModel().
        "</td>
    </tr> 
</table>";?>

</body>
</html>