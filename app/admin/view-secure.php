<?php
											$subdomain =$_SESSION['subdomain'];
											$s ='security';
											$query ="SELECT * FROM $subdomain$s";
									$query_run =mysqli_query($conn3,$query);
										if (mysqli_num_rows($query_run)>0){
											while ($row = mysqli_fetch_assoc($query_run)){
											echo '<tr>
                                                <td><input type="checkbox" value="'.$row["name"].'" name="name[]"/></td>
                                                <td>'.$row["name"].'</td>
                                                
                                                <td>'.$row["phone"].'</td>
                                            </tr>';
										
											}
											}
											?>