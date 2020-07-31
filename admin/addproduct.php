
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
    
                                <div class="themsp">
                                    <form action="admin.php?act=addproduct" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="id">Chọn Danh Mục</label>
                                           <select name="iddanhmuc" id="danhmuc">
                                                <option value="0">Choosee</option>

                                                <?php 
                                                    foreach ($showdmsp as $dm) {
                                                        $kq = '<option value="'.$dm['id'].'">'.$dm['namedm'].'</option>';
                                                        echo $kq ;
                                                    }         
                                                ?>
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Chọn ảnh</label>
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nhập Tên</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập vào Tên Sản Phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Nhập Giá</label>
                                            <input type="number" name="price" id="price" class="form-control" placeholder="Nhập vào Giá Sản Phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="vote">Đánh Giá</label>
                                            <input type="number" name="vote" id="vote" class="form-control" placeholder="Nhập vào Đánh Giá Sản Phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="discount">Giảm Giá</label>
                                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Giảm Giá(Nhập vào %)">
                                        </div>
                                        <div class="form-group radio">
                                            <div class="input-radio">
                                                <label for="">Sắp Nhập</label>
                                                <input type="radio" name="commingsoon" id="commingsoon" value="1">
                                            </div>
                                            <div class="input-radio">
                                                <label for="">Không</label>
                                                <input type="radio" name="commingsoon" id="commingsoon" value="0" checked>
                                            </div>
                                        </div>
                                        <div class="form-group radio">
                                            <div class="input-radio">
                                                <label for="">Mới</label>
                                                <input type="radio" name="new" id="new" value="1">
                                            </div>
                                            <div class="input-radio">
                                                <label for="">Không</label>
                                                <input type="radio" name="new" id="new" value="0" checked>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Chi Tiết Sản Phẩm</label>
                                            <textarea name="detail" id="detail" cols="60" rows="10" placeholder="nhập vào chi tiết sản phẩm"></textarea>
                                        </div>

                                        <div class="divsubmit">
                                            <input type="submit" value="Thêm" name="them" onclick="return checkAddPro()">
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
