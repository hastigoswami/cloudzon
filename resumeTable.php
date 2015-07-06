			<table id="example" class="display" cellspacing="0" width="100%" align="center">
				<thead>
					<tr>
						<th>Name</th>
						<th>qualification</th>
						<th>email</th>
						<th>location</th>
						<th>experience</th>
						<th>Reference</th>
						<th>skill</th>
						<th>Date</th>
						<th>Resum</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Name</th>
						<th>qualification</th>
						<th>email</th>
						<th>location</th>
						<th>experience</th>
						<th>Reference</th>
						<th>skill</th>
						<th>Date</th>
						<th>Resum</th>
					</tr>
				</tfoot>
				<tbody>
				<?php 
				foreach($resumeData as $value)
				{
				?>
					<tr>
						<td align="center"><?php echo $value['name'];?></td>
						<td align="center"><?php echo $value['qualification'];?></td>
						<td align="center"><?php echo $value['email'];?></td>
						<td align="center"><?php echo $value['location'];?></td>
						<td align="center"><?php echo $value['experience'];?></td>
						<td align="center"><?php echo $value['reference'];?></td>
						<td align="center"><?php echo $value['skill'];?></td>
						<td align="center"><?php echo $value['date'];?></td>
						<td align="center"><a href="<?php echo $value['resume_path'];?>"><?php echo $value['resume_path'];?></a>
						</td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>