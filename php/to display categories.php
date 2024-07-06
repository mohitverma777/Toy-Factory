<?php
                                    $connection = mysqli_connect('localhost','root','','twa');
                                    $select_category="SELECT * FROM 'categories'";
                                    $result_category=mysqli_query($connection,$select_category);
                                    while($row_data=mysqli_fetch_assoc($result_category)){
                                        $category_title=$row_data['category_title'];
                                        $category_id=$row_data['category_id'];
                                        echo "<li><a href='#'>$category_title</a></li>";
                                    }
                                  ?>