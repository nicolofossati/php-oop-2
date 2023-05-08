<?php
//Per eserczio sul try / catch
$palla_da_tennis = new Toy('Palla da tennis', 1, 'dog', 'Fido', 'img-vuota', 1, 1, 1);

try {
    //provo a modificare le dimensioni della pallina da tennis
    echo $palla_da_tennis->setDimension('stringa', 2, 1);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}



$articles = [
    new Food('Cibo gatti', 12, 'cat', 'felix', 'https://www.futurapet.it/content/images/thumbs/0004006_purina-felix-le-ghiottonerie-multipack-pollo-manzo-coniglio-agnello_350.jpeg', 2300, 10),
    new Toy('Palla', 3.99, 'dog', 'supertele', 'https://m.media-amazon.com/images/I/61tQ9pN5BVL._AC_SL1438_.jpg', 12, 12, 12),
    new Product('Museruola', 16.99, 'dog', 'baskerville', 'https://www.eurodogs.it/foto/grandi/museruolafisiologicak9perrottwiler-4.jpg', 1, 20, 50, 24.5),
    new Product('Lettiera', 8.49, 'cat', 'Vitakraft Magic Clean', 'https://m.media-amazon.com/images/I/61YaF95B37L._AC_SL1000_.jpg', 2.2, 34, 40, 13.5),
    new Food('Croccantini', 26.99, 'dog', 'Purina Friskies', 'https://m.media-amazon.com/images/I/91toszA3GuL._AC_SL1500_.jpg', 3450, 12)
];