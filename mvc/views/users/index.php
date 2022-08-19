<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
           
        </tr>
    </thead>

    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name_category; ?></td>
              
                <td>
                    <a href="UserController.php?action=edit&id=<?php echo $row->MAKHACHHANG; ?>">Sua</a> | 
                    <a href="UserController.php?action=delete&id=<?php echo $row->MAKHACHHANG; ?>">Xoa</a> 
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>