<?php
$bandeirada_taxi = 4.32; doubleval($bandeirada_taxi);
$um_km = 2.10; doubleval($um_km);
$kms_percorridos = 22; doubleval($kms_percorridos);
$total_corrida = $bandeirada_taxi + ($um_km * $kms_percorridos); doubleval($total_corrida);

echo "<div>O valor da bandeirada é <i>R$</i> <b>$bandeirada_taxi</b>.</div>";
echo "<div>A valor/km é <i>R$</i> <b>$um_km</b>.</div>";
echo "<div>A distância percorrida foi <b>$kms_percorridos</b> Km.</div>";
echo "O total da corrida deu: <i>R$</i> <b>$total_corrida</b>";
