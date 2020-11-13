<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>
<div class="container" style="font-family: 'Quicksand', sans-serif;"><br>
  <div class="alert alert-info">
    <?php $pCount='';$query=$db->query("SELECT * FROM equipment"); $pCount=$query->rowCount();?>
    Total no of equipment: <?php echo $pCount; ?>
  </div>
  <h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Manage Equipment</h1>
  <p align="right"><a href="add-eqp.php" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New Equipment</a></p>
  <table class="table table-hover table-striped" id="table">
 		<thead>
 			<tr>
 				<th>ID</th>
         <th>Equipment No.</th>
         <th>Equipment Name</th>
 				<th>Equipment Category</th>         
         <th>Equipment Cost</th>
         <th>Photo</th>
 				<th>Description</th>
        <th>Actions</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
       $all = $db->query("SELECT * FROM equipment ORDER BY id DESC");
       $fetch = $all->fetchAll(PDO::FETCH_OBJ);
       foreach($fetch as $data){ 
        ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->epqno ?></td>
            <td><?php echo $data->name ?></td>
            <td><?php echo $data->epqcat ?></td>                
            <td><?php echo $data->cost ?></td>
            <td>
              <img width="70" height="70" src="<?php echo $data->img; ?>" class="img img-responsive thumbnail">
            </td>
            <td><?php echo wordwrap($data->description,300,'<br>'); ?></td>
            <td>
            <a href="edit-eqp.php?id=<?php echo $data->id ?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;
            <a onclick="return confirm('Confirm Delete ?')" href="delete-eqp.php?id=<?php echo $data->id ?>"><i class="fa fa-trash"></i> Delete</a>
            </td>
          </tr>    
      <?php 
      }
      ?>
 		</tbody>
 	</table>
</div>
