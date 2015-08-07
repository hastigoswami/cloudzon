<div  style="overflow-x: auto;">
<table id="example4" class="display" cellspacing="0" width="100%" align="center">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Number</th>
        <th>Company Name</th>
        <th>Company Add</th>
        <th>Week</th>
        <th>Letter</th>
        <th>No Line</th>
        <th>Doc Type</th>
        <th>Process Doc</th>
        <th>Features</th>
        <th>Outsource</th>
        <th>Time</th>
        <th>Quality</th>
        <th>Price</th>
        <th>Security</th>
        <th>Any</th>
        <th>Interested</th>
        <th>Date</th>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Number</th>
        <th>Company Name</th>
        <th>Company Add</th>
        <th>Week</th>
        <th>Letter</th>
        <th>No Line</th>
        <th>Doc Type</th>
        <th>Process Doc</th>
        <th>Features</th>
        <th>Outsource</th>
        <th>Time</th>
        <th>Quality</th>
        <th>Price</th>
        <th>Security</th>
        <th>Any</th>
        <th>Interested</th>
        <th>Date</th>
    </tr>
    </tfoot>
    <tbody>
    <?php
    foreach($itranscript_data as $value)
    {
        ?>
        <tr>
            <td align="center"><?php echo $value['name'];?></td>
            <td align="center"><?php echo $value['position'];?></td>
            <td align="center"><?php echo $value['email'];?></td>
            <td align="center"><?php echo $value['number'];?></td>
            <td align="center"><?php echo $value['company_name'];?></td>
            <td align="center"><?php echo $value['company_add'];?></td>
            <td align="center"><?php echo $value['week'];?></td>
            <td align="center"><?php echo $value['letter'];?></td>
            <td align="center"><?php echo $value['no_line'];?></td>
            <td align="center"><?php echo $value['doc_type'];?></td>
            <td align="center"><?php echo $value['process_doc'];?></td>
            <td align="center"><?php echo $value['features'];?></td>
            <td align="center"><?php echo $value['outsource'];?></td>
            <td align="center"><?php echo $value['time'];?></td>
            <td align="center"><?php echo $value['quality'];?></td>
            <td align="center"><?php echo $value['price'];?></td>
            <td align="center"><?php echo $value['security'];?></td>
            <td align="center"><?php echo $value['any'];?></td>
            <td align="center"><?php echo $value['interested'];?></td>
            <td align="center"><?php echo $value['date'];?></td>



        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</div>