<?php
$products = [
    "product1" => ["name" => "Sản phẩm 1", "price" => 10, "quantity" => 5],
    "product2" => ["name" => "Sản phẩm 2", "price" => 20, "quantity" => 3],
    "product3" => ["name" => "Sản phẩm 3", "price" => 15, "quantity" => 7],
];
echo "Thông tin của tất cả sản phẩm:\n";
foreach ($products as $key => $product) {
    echo "Mã sản phẩm: $key, Tên: " . $product['name'] . ", Giá: $" . $product['price'] . ", Số lượng: " . $product['quantity'] . "\n";
}
function tinhTongGiaTri($products) {
    $tongGiaTri = 0;
    foreach ($products as $product) {
        $tongGiaTri += $product['price'] * $product['quantity'];
    }
    return $tongGiaTri;
}
$tongGiaTri = tinhTongGiaTri($products);
echo "\nTổng giá trị của tất cả sản phẩm là: $" . $tongGiaTri;
?>