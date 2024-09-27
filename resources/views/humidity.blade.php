<?php
$warna = "tracking-wide text-gray-800 uppercase dark:text-neutral-500";

foreach ($nilaisensor as $data) {
    if (floatval($data->humidity) >= $normal) {
        $warna = "text-green-600";
    }
    if (floatval($data->humidity) >= $abnormal) {
        $warna = "text-rose-800";
    }
    echo "<span class='" . $warna . "'>" . $data->humidity . " %</span>";
}
