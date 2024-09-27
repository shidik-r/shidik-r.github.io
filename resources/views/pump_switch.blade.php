<?php
$pump_label = '<h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">Off</h3>';

foreach ($nilaisensor as $data) {
    $pump_status = $data->pump_status;
    if ($pump_status == 1) {
        $pump_label = '<h3 class="text-xl font-medium text-blue-700 sm:text-2xl">On</h3>';
    }
    echo $pump_label;
}
