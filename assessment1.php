<?php
    $laptop = array(
      array(
        ‘merek’             => ‘Apple’,
        ‘ram’               => ‘8’,
        ‘harddisk’          => ‘512’,
        ‘usb_type_c’        => TRUE,
        ‘harga’             => ‘20000000’ ),

    array(
        ‘merek’            => ‘Asus,
        ‘ram’              => ‘16’,
        ‘harddisk’         => ‘512’,
        ‘usb_type_c’       => FALSE,
        ‘harga’            => ‘18000000’ ),
 
    array(
       ‘merek’             => ‘Lenovo’,
       ‘ram’               => ‘8’,
       ‘harddisk’          => ‘256’,
       ‘usb_type_c’        => TRUE,
       ‘harga’             => ‘8000000’ 
   ),

     
    echo "<table border='1' cellpadding='5'>";
    echo "<thead>
          <th colspan='4'><b>PESANAN ANDA</b></th>
          </thead>
          <thead>
          <th><b>merek</b></th>
          <th><b>ram</b></th>
          <th><b>usb_type_c</b></th>
          <th><b>harga(Rp)</b></th>
          </thead>";
    
    for($x=0;$x<count($laptop);$x++){
        echo "<tr>";
        echo "<td>".$laptop[$x]['merek']."</td>";
        echo "<td>".$laptop[$x]['ram']."</td>";  
        echo "<td>".$laptop[$x]['harddisk']."</td>";  
        echo "<td>".$laptop[$x]['usb_type_c']."</td>";  
        echo "<td>".$laptop[$x]['harga(Rp)']."</td>";  
        echo "</tr>";
    }
    echo "</table>";
    echo "<table border=0 cellpadding=8>
          <tr><td></td></tr>   
          </table>";

    $pembeli = array(array('merek'=>'Apple',
                             'ram'=>8),
                       array('merek'=>'Asus',
                             'ram'=>16),
                       array('merek'=>'lenovo',
                             'ram'=>8),
                    );
    $total = 0;
    echo "<table border='1' cellpadding='5'>";
    echo "<thead>
          <th colspan='3'><b>DATA laptop</b></th>
          </thead>
          <thead>
          <th><b>merek</b></th>
          <th><b>ram<b></th>
          <th><b>hardisk</b></th>
          <th><b>usb_type_c</b></th>
          <th><b>harga(Rp)</b></th>
          </thead>";
          
    for($x=0;$x<count($pembeli);$x++){
        echo "<tr>";
        echo "<td>".$pembeli[$x]['Judul']."</td>";
        echo "<td>".$pembeli[$x]['Jumlah']."</td>";
        for($y=0;$y<count($buku);$y++){
            if($pembeli[$x]['Judul']==$buku[$y]['Judul']){
                $Harga = $buku[$y]['Harga']*$pembeli[$x]['Jumlah'];
                break;
            }
        }
        $total = $total + $Harga;
        echo "<td>".$Harga."</td>";  
        ;
    }
    echo "<tr>
          <td colspan='2'><b>Total Harga (Rp)</b></td>
          <td>".$total."</td>
          </tr>";
    echo "</table>";
?>