<?php
require_once __DIR__ . '/db.php';
$result=$pdo->query("SELECT id,name,price FROM products ORDER BY id"); $products=$result->fetchAll();
?><!doctype html><html><head><meta charset="utf-8"><title>Shop Portal</title><link rel="stylesheet" href="css/style.css"></head><body><header><h1>Shop Portal</h1><p>Application Team Demo Website</p></header><main><h2>Products</h2><div class="products"><?php foreach($products as $p): ?><div class="card"><h3><?=htmlspecialchars($p['name'])?></h3><p>₹<?=htmlspecialchars($p['price'])?></p></div><?php endforeach; ?></div></main></body></html>
