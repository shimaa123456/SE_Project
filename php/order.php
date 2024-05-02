<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order_Fruitikha</title>
    <link rel="stylesheet" href="../public/css/order.css">
    <link href="../resources/font awesome/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- the header section of the page -->
    <section>
        <div class="header">
            <header>
                <a href="home.php" class="logo"><img src="../public/images/logo.png" alt="fruit logo" id="logo"></a>
                <nav class="options">
                    <a href="home.php"> Home</a>
                    <a href="about.php">About</a>
                    <a href="contact_insert.php">Contact</a>
                    <a href="shop.php">Shop</a>
                    <a href="news.php">News</a>
                </nav>
                <div>
                    <a href="order.php"><i class="fas fa-shopping-cart" style="color: orange"></i></a>
                </div>
                <div>
                    <a href="login.php"><i class="fas fa-sign-in-alt"></i></a>

                </div>
            </header>
            <div class="Homepage">
                <div>
                    <h3>
                        <pre><b>F R E S H   A N D   O R A G I N I C</b></pre>
                    </h3>
                    <h2><b>Cart</b></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the header of the page -->
    <!-- the body section -->
    <div class="body">

        <div class="row">
            <div class="col1">
                <table class="cart-table">
                    <thead class="cart-table-head">
                        <tr class="table-head-row">
                            <th class="product-remove"></th>
                            <th class="product-image">Product Image</th>
                            <th class="product-name">Name</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'fruitkha_connect.php';
                        try {
                            $pdo = new PDO($attr, $user, $pass, $opts);
                        } catch (PDOException $e) {
                            throw new PDOException($e->getMessage(), (int)$e->getCode());
                        }
                        $query = "SELECT * FROM cart";
                        $result = $pdo->query($query);
                        while ($row = $result->fetch()) {
                            $image = htmlspecialchars($row['image']);
                            $name = htmlspecialchars($row['name']);
                            $price = htmlspecialchars($row['price']);
                            echo "<tr class='table-body-row'>";
                            echo "<td class='product-remove'><a href='javascript:void(0);' onclick='removeItem(\"$name\")'><i
                            class='far fa-window-close'></i></a></td>";
                            echo "<td class='product-image'><img src='$image' alt='$name' width='100' height='100'></td>";
                            echo "<td class='product-name'>$name</td>";
                            echo "<td class='product-price'>$price</td>";
                            echo "<td class='product-quantity'><input type='number' placeholder='0' name='quantity'
                                value='1'></td>";
                            echo "<td class='product-total'>$price</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col2">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Subtotal:</strong></td>
                                <td id="subtotal">$500</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Shipping:</strong></td>
                                <td>$45</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Total:</strong></td>
                                <td id="total">$545</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <button class="boxed-btn" id="update_cart">Update Cart</button>
                        <button class="boxed-btn black">Check Out</button>
                    </div>
                </div>
                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form">
                        <form action="#" method="post">
                            <p>
                                <input type="text" placeholder="Coupon">
                            </p>
                            <p>
                                <input type="submit" value="Apply" class="submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end of the body section -->
    <!-- banner section -->
    <div class="imagess">
        <img src="../public/images/1.png">
        <img src="../public/images/2.png">
        <img src="../public/images/3.png">
        <img src="../public/images/4.png">
    </div>
    <!-- end of banner section -->
    <!-- footer section -->
    <div class="foot">
        <div class="about">
            <h2 style="color: white;" class="about_h2">About us</h2>
            <p class="inabout">Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>

        </div>
        <div class="about2">
            <h2 style="color: white;">Get in Touch</h2>
            <p class="inabout2">
                34/8, East Hukupara, Gifirtok, Sadan.
                support@domain.com
                +00 111 222 3333
            </p>

        </div>
        <div class="about3">
            <h2>Pages</h2>

            <ul>

                <li> <a href="home.php"><i class="fas fa-angle-right"></i>Home</a></li>
                <li> <a href="about.php"> <i class="fas fa-angle-right"></i>About</a></li>
                <li> <a href="shop.php"><i class="fas fa-angle-right"></i>Shop</a></li>
                <li> <a href="news.php"><i class="fas fa-angle-right"></i>News</a></li>
                <li> <a href="contact_insert.php"><i class="fas fa-angle-right"></i>Contact</a></li>
            </ul>


        </div>
        <div class="about4">
            <h2 style="color: white;">Subscribe</h2>
            <p class="inabout">Subscribe to our mailing list to get the latest updates.</p>
            <input type="email" placeholder="email">
            <button value="submit"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
    <hr>
    <div class="fin">
        <span class="infin">Copyrights © 2045 -<span class="orangecolor">ShimaaEssamDesign</span> , All Rights
            Reserved.</span>
        <div><i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-dribbble"></i>
        </div>
    </div>
    <!-- end of footer section -->

    <script>
    document.getElementById("update_cart").onclick = update;

    function update() {
        var tableRows = document.querySelectorAll(".table-body-row");

        var subtotal = 0;

        tableRows.forEach(function(row) {
            var quantityInput = row.querySelector(".product-quantity input");
            var priceElement = row.querySelector(".product-price");

            var quantity = parseInt(quantityInput.value);
            var price = parseInt(priceElement.textContent);

            var total = quantity * price;

            row.querySelector(".product-total").textContent = "$" + total;

            subtotal += total;
        });
        document.getElementById("subtotal").textContent = "$" + subtotal;
        var total = subtotal - 45;
        document.getElementById("total").textContent = "$" + total;
    }

    function removeItem(name) {
        if (confirm("Are you sure you want to remove this item?")) {
            fetch('delete_item.php?name=' + name)
                .then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        console.error('Error deleting item');
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
    }
    </script>
</body>

</html>