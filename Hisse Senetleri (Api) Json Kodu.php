Hisse senetleri json ile api olarak sitenize eklemek için aşağıdaki kodları kullanabilirsiniz. ▼☟↓

<?php
    $JSON = json_decode(file_get_contents('https://www.genelpara.com/embed/borsa.json'), true);
?>
<ul>
    <li>
        <span>AKBNK</span>
        <span>Fiyat: <?php echo $JSON['AKBNK']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['AKBNK']['degisim']; ?></span>
    </li>
    <li>
        <span>ASELS</span>
        <span>Fiyat: <?php echo $JSON['ASELS']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['ASELS']['degisim']; ?></span>
    </li>
    <li>
        <span>EREGL</span>
        <span>Fiyat: <?php echo $JSON['EREGL']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['EREGL']['degisim']; ?></span>
    </li>
    <li>
        <span>GARAN</span>
        <span>Fiyat: <?php echo $JSON['GARAN']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['GARAN']['degisim']; ?></span>
    </li>
    <li>
        <span>KRDMD</span>
        <span>Fiyat: <?php echo $JSON['KRDMD']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['KRDMD']['degisim']; ?></span>
    </li>
</ul>


Yada iframe ile hazır kodlar olarak eklemek için aşağıdaki iframe kodunu kullanabilirsiniz.

<iframe src="https://www.genelpara.com/embed/?symbol=borsa&borsa=AKBNK,ASELS,EREGL,GARAN,KRDMD&stil=stil-6&renk=beyaz" frameborder="0" width="1020" height="300"></iframe>

GP.