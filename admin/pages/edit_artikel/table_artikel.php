 
                <thead>
					<tr>
						<th>Judul Artikel</th>
						<th>Isi</th>
						<th>Tanggal</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryspl = mysqli_query ($konek, "SELECT  * FROM blog ");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){

							echo "
								<tr>
									<td>$spl[judul]</td>
									<td>$spl[isi]</td>
									<td>$spl[tanggal]</td>";

							echo "
								</tr>";
						}
					?>
				</tbody>
                            </table>