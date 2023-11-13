<!-- Trắc Ngiệm:
1. 5
2. d,error
3. d.$
4. a, echo
5. a, == so sánh giá trị, === so sánh giá trị và kiểu dữ liệu -->

//Trắc Ngiệm:
1. 5
2. d,error
3. d.$
4. a, echo
5. a, == so sánh giá trị, === so sánh giá trị và kiểu dữ liệu
<br>

//Tự luận
<br>
//1.
<br>
<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

echo "Các số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>
<br>
//2.
<br>
<?php
$products = array(
    "productA" => array("name" => "Áo Polo", "price" => 25, "quantity" => 20),
    "productB" => array("name" => "Quần Jeans", "price" => 50, "quantity" => 15),
    "productC" => array("name" => "Giày Sneakers", "price" => 80, "quantity" => 10)
);

echo "Thông tin sản phẩm:<br>";
foreach ($products as $productID => $product) {
    echo "Product ID: $productID<br>";
    echo "Name: {$product['name']}<br>";
    echo "Price: {$product['price']}<br>";
    echo "Quantity: {$product['quantity']}<br><br>";
}

function sumValue($products) {
    $tong = 0;
    foreach ($products as $product) {
        $tong += $product['price'] * $product['quantity'];
    }
    return $tong;
}

$tonggiatri = sumValue($products);
echo "Tổng giá trị của tất cả sản phẩm là: $tonggiatri";
?>