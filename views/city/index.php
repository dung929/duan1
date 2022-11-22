<?php

echo '<ul>';
foreach ($cities as $city) {
    echo '<li>
    <a href="#">' . $city->name . '</a>
  </li>';
}
echo '</ul>';
