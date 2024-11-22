<!DOCTYPE html>
<html lang="eng" id="dashborone">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=display-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php  
    include('manggil.php');$SQL="SELECT*FROM isi_data ORDER BY id DESC";$hasil=$conn->query($SQL);
    ?>
</head>
<body>
    <header>
    <div class="content"></div>
    <div class="dashbor">Dashbor</div>
    <div class="masterB">Maste barang</div>
    <div class="receive">Receiving</div>
    <div class="isuu">Issuing</div>
    </header>
   <main>
    <div class="top-dash">
    <div class="ini">
        <h3>username</h3>
        <div class="img"></div>
    </div>
    </div>
    <div class="data">
        <input class="serc" type="search" placeholder="pencarian">
        <table>
            <tr>
                <th>no</th>
                <th>nama barang </th>
                <th>pengadaan </th>
                <th>stok</th>
                <th>
                    status
                </th>
            </tr>
           <?php
           while($baris=$hasil->fetch_row()){
           $inilah[]=$baris;
           }
           $inilah = array_reverse($inilah);

           foreach($inilah as $baris){
            echo '<tr><th>'.$baris[0].'</th><th>'.$baris[1].'</th><th>'.$baris[2].'</th><th>'.$baris[3].'</th><th>'.$baris[4].'</th></tr>';
           }
           ?>
        </table>
    </div>
    <div class="botton-dash">
        <h3 class="kiri">copyright </h3>
        <h3 class="kanan">versi kesekian</h3>
    </div>
   </main>
</body>
</html>