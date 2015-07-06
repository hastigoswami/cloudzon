			<table id="example3" class="display" cellspacing="0" width="100%" align="center">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Data</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Data</th>
					</tr>
				</tfoot>
				<tbody>
				<?php 
				foreach($contactData as $value)
				{
				?>
					<tr>
						<td align="center"><?php echo $value['name'];?></td>
						<td align="center"><?php echo $value['email'];?></td>
						<td align="center"><?php echo $value['message'];?></td>
						<td align="center"><?php echo $value['date'];?></td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>