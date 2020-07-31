
                    <div class="main-right">
                        <div class="boxcenter">
                            <p class="title">DANH SÁCH SẢN PHẨM</p>
                            <div class="boxshow">
                                <div class="danhmuc">
                                    <h4>ALL CATE</h4>
                                    <div class="danhmuc__icon">
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-remove"></i>
                                    </div>
                                </div>
                                <div class="limit-search">
                                    <form action="/admin/limit" method="get">
                                        <div class="select">
                                            <select name="q" id="" value="">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <input type="submit" value="Xem" class="xem">
                                    </form>
                                    <form action="/admin/search" method="get">
                                        <input type="text" placeholder="Enter your keyword..." name="q">
                                        <input type="submit" value="Search" class="search">
                                    </form>
                                </div>
                                <div class="showtable">
                                    <table>
                                        <tr class="tabletitle">
                                            <th class="thid">ID</th>
                                            <th class="thname">Name</th>
                                            <th class="thphoto">Photo</th>
                                            <th class="thprice">Price</th>
                                            <th class="thdiscount">Discount</th>
                                            <th class="thaction">Action</th>
                                        </tr>
                                        
                                        <?php 
                                         
                                            // var_dump( $showSpAd);
                                            foreach ($showSpAd as $showsp) {
                                                $id = $showsp['id'];
                                                $name = $showsp['name'];
                                                $anh = $pathimg.$showsp['img'];
                                                $gia = $showsp['gia'];
                                                $giamgia = $showsp['giamgia'];
                                                $linkdel = "admin.php?act=delsanpham&iddel=".$id;
                                                $linkedit = "admin.php?act=editsanpham&idedit=".$id;
                                                echo 
                                                '<tr>
                                                    <td>'.$id.'</td>
                                                    <td>'.$name.'</td>
                                                    <td><img src="'.$anh.'"></td>
                                                    <td>'.$gia.'</td>
                                                    <td>'.$giamgia.'</td>
                                                    <td>  <a href="'.$linkedit.'"> <i class="fa fa-edit" ></i></a> <a href="'.$linkdel.'"> <i class="fa fa-trash" onclick="return checkDelete()"></i></a></td> 
                                                </tr>';      
                                            }
                                                                            
                                        ?>
                                    </table>
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
