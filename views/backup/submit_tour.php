<?php foreach ($submit_tour as $key => $value) : ?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['name_tour'] ?></td>
        <td><?= $value['name_client'] ?></td>
        <td><?= $value['number_client'] ?></td>
        <td><?= $value['time_booktour'] ?></td>
        <td><?= $value['guide_tour'] ?></td>
        <td><?= $value['coach_tour'] ?></td>
        <td><?= $value['hotel_tour'] ?></td>
        <td><?= $value['category_name'] ?></td>
        <td><?= $value['sum_tour'] ?></td>
    </tr>
<?php endforeach ?>