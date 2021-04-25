<html>
    <head>
        <title>My NBA Store</title>
    </head>

    <body>
        <h1>Welcome to my NBA store</h1>
        <br>
        <ul>
            <?php
                $json = file_get_contents("http://product-service");
                $obj = json_decode($json);
                
                $products = $obj->products;

                foreach ($products as $product) {
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>