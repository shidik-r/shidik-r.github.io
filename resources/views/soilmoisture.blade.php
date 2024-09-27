<?php
$warna = "tracking-wide text-gray-800 uppercase dark:text-neutral-500";

foreach ($nilaisensor as $data) {
    if (floatval($data->soil_moisture) >= $normal) {
        $warna = "text-green-600";
    }
    if (floatval($data->soil_moisture) >= $abnormal) {
        $warna = "text-rose-800";
    }
    echo "<span class='" . $warna . "'>" . $data->soil_moisture . " %</span>";
}
