<?php if(!isset($_GET['idedit'])&&($_GET['idedit']>0)) { 
    echo "Sản phẩm không tồn tại";
}else{?>
    

                    <div class="main-right">
                        <div class="boxcenter">
                            <p class="title">THÊM SẢN PHẨM</p>
                            <div class="boxshow">
                                <div class="danhmuc">
                                    <h4>ALL CATE</h4>
                                    <div class="danhmuc__icon">
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-remove"></i>
                                    </div>
                                </div>
                                <?php
                                    $linkedit = 'admin.php?act=editsanpham&idedit='.$spsua['id'];
                                ?>
                                <div class="themsp">
                                    <form action="<?=$linkedit?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="id">Chọn Danh Mục</label>
                                           <select name="iddanhmuc" id="danhmuc">
                                            <?php
                                                foreach ($showdmsp as $dm) {
                                                    $sl = "selected";
                                                    $iddm = $spsua['iddm'];
                                                    if($dm['id'] == $iddm){
                                                        $showDm .= '<option value="'.$dm['id'].'"'.$sl.'>'.$dm['namedm'].'</option>';
                                                    }
                                                else{
                                                    $showDm .= '<option value="'.$dm['id'].'">'.$dm['namedm'].'</option>';
                                                }
                                                }     
                                                echo $showDm;  
                                                $img = $pathimg.$spsua['img'];
                                                if(is_file($img)){
                                                    $img = '<img src="'.$img.'" width="200px">';
                                                }  
                                                else{
                                                    $img = 'nothing';
                                                }
                                                if($spsua['sapnhap'] == 1){
                                                    $sapnhap = 'checked';
                                                }
                                                else{
                                                    $sapnhap ='';
                                                }
                                                if($spsua['sapnhap'] == 0){
                                                    $sapnhap2 = 'checked';
                                                }
                                                else{
                                                    $sapnhap2 = '';
                                                }
                                                if($spsua['moi'] == 1){
                                                    $moi = 'checked';
                                                }
                                                else{
                                                    $moi = '';
                                                }
                                                if($spsua['moi'] == 0){
                                                    $moi2 = 'checked';
                                                }
                                                else{
                                                    $moi2 = '';
                                                }
                                            ?> 
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Chọn ảnh</label>
                                            <?=$img?>
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nhập Tên</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập vào Tên Sản Phẩm" value="<?= $spsua['name']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Nhập Giá</label>
                                            <input type="number" name="price" id="price" class="form-control" placeholder="Nhập vào Giá Sản Phẩm" value="<?= $spsua['gia']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="vote">Đánh Giá</label>
                                            <input type="number" name="vote" id="vote" class="form-control" placeholder="Nhập vào Đánh Giá Sản Phẩm" value="<?= $spsua['vote']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="discount">Giảm Giá</label>
                                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Giảm Giá(Nhập vào %)" value="<?= $spsua['giamgia']?>">
                                        </div>
                                        <div class="form-group radio">
                                            <div class="input-radio">
                                                <label for="">Sắp Nhập</label>
                                                <input type="radio" name="commingsoon" id="commingsoon" value="1" <?=$sapnhap?> >
                                            </div>
                                            <div class="input-radio">
                                                <label for="">Không</label>
                                                <input type="radio" name="commingsoon" id="commingsoon" value="0" <?=$sapnhap2?> >
                                            </div>
                                            </div>
                                            <div class="form-group radio">
                                                <div class="input-radio">
                                                    <label for="">Mới</label>
                                                    <input type="radio" name="new" id="new" value="1" <?=$moi?> >
                                                </div>
                                                <div class="input-radio">
                                                    <label for="">Không</label>
                                                    <input type="radio" name="new" id="new" value="0" <?=$moi2?>>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Chi Tiết Sản Phẩm</label>
                                            <textarea name="detail" id="detail" cols="60" rows="10" placeholder="<?=$spsua['mota']?>" value=""></textarea>
                                        </div>

                                        <div class="divsubmit">
                                            <input type="submit" value="Sửa" name="sua" onclick="return checkEditPro()">
                                            <a name="" id="" class="btn btn-cancel" href="#" role="button">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>