		<center><table>
			<?php 
			include "koneksi.php";
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM essay WHERE id = '$id'");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td>
					<?php echo "<img src='../../file/".$d['file']."'style='width:500px; height:500px;'>"?>
				</td>		
			</tr>
			<?php } ?>
		</table></center>