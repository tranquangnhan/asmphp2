
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
                                    <form action="admin.php?act=addcategory" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Nhập Tên Danh Mục</label>
                                            <input type="text" name="namedm" id="name" class="form-control" placeholder="Nhập vào tên danh mục">
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
