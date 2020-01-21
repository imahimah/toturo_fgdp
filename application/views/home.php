<!-- 
<?php 
foreach ($user as $da) {
	echo "Usernama	:". $da['username']."". "Email    :".$da['email']. "<br>";
}
 ?> 
 -->
<div class="col-md-12" style="padding: 12px"> 
<h2>List Data User 
</h2>
</div>
<div class="col-md-6" style="padding:12px">
	<a href="<?php echo site_url('home/add_user');?>" class="btn btn-primary"> Tambah User </a>
	<!--  <?php pesan_get('msg', "Berhasil Menambahkan Data ", "Berhasil Menghapus Data ", "Berhasil Mengedit Data ", "Gagal Mengedit Data ")?> 
 -->	<table class="table table-striped" style="margin-top: 15px">
		<thead>
			<tr>
				<th scope="col"> No </th>
				<th scope="col"> Username </th>
				<th scope="col"> Email </th>
				<th scope="col"> User Role </th>
				<th scope="col"> Action </th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=0; 
				foreach ($user as $da) {
					$no++;
					?>
	      			<tr>
	      				<td><?php echo $no;?></td>
	      				<td><?php echo $da['username'];?></td>
	      				<td><?php echo $da['email'];?></td>
	      				<td><?php echo $da['user_role'];?></td>
	      				
	      				<td>
	      					<a href="<?php echo site_url('home/edit_user/'.$da['id_user']);?>" class="btn btn-sm btn-info">Edit</a>
	      					<a href="<?php echo site_url('home/delete_user/'.$da['id_user']);?>" class="btn btn-sm btn-danger">Delete</a>
	      				</td>

			<?php 

				}
			?> 

		</tbody>
	</table>	
</div>

