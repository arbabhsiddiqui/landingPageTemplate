<?php //print_r($data);
?>


<table class="table" border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <!-- check fields are avalable or not -->
        <?php if ($data['homepage']->field1) { ?>
            <th><?= $data['homepage']->field1 ?></th>
        <?php }
        if ($data['homepage']->field2) { ?>
            <th><?= $data['homepage']->field2 ?></th>
        <?php }
        if ($data['homepage']->field3) { ?>
            <th><?= $data['homepage']->field3 ?></th>
        <?php }
        if ($data['homepage']->field4) { ?>
            <th><?= $data['homepage']->field4 ?></th>
        <?php }
        if ($data['homepage']->field5) { ?>
            <th><?= $data['homepage']->field5 ?></th>
        <?php }
        if ($data['homepage']->field6) { ?>
            <th><?= $data['homepage']->field6 ?></th>
        <?php }
        // check dropdowns are available or not
        if ($data['homepage']->dropdown1) { ?>
            <th><?= $data['homepage']->dropdown1 ?></th>
        <?php }
        if ($data['homepage']->dropdown2) { ?>

            <th><?= $data['homepage']->dropdown2 ?></th>
        <?php }
        if ($data['homepage']->dropdown3) { ?>

            <th><?= $data['homepage']->dropdown3 ?></th>
        <?php } ?>

    </tr> <?php foreach ($data['enquiry'] as $enquiry) : ?>
        <tr>
            <td><?php echo $enquiry->id ?></td>
            <td><?php echo $enquiry->name ?></td>
            <td><?php echo $enquiry->email ?></td>
            <td><?php echo $enquiry->phone_number ?></td>
            <?php if ($data['homepage']->field1) { ?>
                <td><?php echo $enquiry->field1 ?></td>
            <?php }
                if ($data['homepage']->field2) { ?>
                <td><?php echo $enquiry->field2 ?></td>
            <?php }
                if ($data['homepage']->field3) { ?>
                <td><?php echo $enquiry->field3 ?></td>
            <?php }
                if ($data['homepage']->field4) { ?>
                <td><?php echo $enquiry->field4 ?></td>
            <?php }
                if ($data['homepage']->field5) { ?>
                <td><?php echo $enquiry->field5 ?></td>
            <?php }
                if ($data['homepage']->field6) { ?>
                <td><?php echo $enquiry->field6 ?></td>
            <?php }
                if ($data['homepage']->dropdown1) { ?>
                <td><?php echo $enquiry->dropdown1_value ?></td>
            <?php }
                if ($data['homepage']->dropdown2) { ?>
                <td><?php echo $enquiry->dropdown2_value ?></td>
            <?php }
                if ($data['homepage']->dropdown3) { ?>
                <td><?php echo $enquiry->dropdown3_value ?></td>
            <?php } ?>
        </tr>
    <?php endforeach; ?>
</table>


<?php
date_default_timezone_set("Asia/Calcutta");
$timestamp = date('dmY');
$filename = 'Export_excel_' . $timestamp . '.xls';

header("Content-Type:application/xls");
header("Content-Disposition:attachment; filename=$filename");
exit();

?>