 
                <thead>
					<tr>
						<th>Judul</th>
						<th>Isi</th>
						<th>Author</th>
						<th>Tanggal</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryspl = mysqli_query ($connect, "SELECT  * FROM bramlawfirm_posts ");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){

							echo "
								<tr>
									<td>$spl[post_title]</td>
									<td>$spl[post_content]</td>
									<td>$spl[post_author]</td>
									<td>$spl[post_date]</td>";

							echo "
								</tr>";
						}
					?>
				</tbody>
                            </table>