<p>
    что-нибудь
</p>
<ul>
    <?php foreach ($products as $product): ?>
    <li>
        Название: <?= $product['name'] ?>
        Цена: <?= $product['price'] ?>
    </li>
    <?php endforeach; ?>
</ul>