<?php
$warna = "tracking-wide text-gray-800 uppercase dark:text-neutral-500";

foreach ($nilaisensor as $data) {
    if (floatval($data->temperature) >= $normal) {
        $warna = "text-green-600";
    }
    if (floatval($data->temperature) >= $abnormal) {
        $warna = "text-rose-800";
    }
    echo "<span class='" . $warna . "'>" . $data->temperature . " °C</span>";
}
