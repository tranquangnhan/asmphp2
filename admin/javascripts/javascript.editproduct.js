function checkEditPro() {
    const id = document.getElementById('id');
    const name = document.getElementById('name');
    const price = document.getElementById('price');
    const cate = document.getElementById('cate');
    const vote = document.getElementById('vote');
    const discount = document.getElementById('discount');
    const commingsoon = document.getElementById('commingsoon');
    const news = document.getElementById('new');

    if (id.value == '') {
        alert('Phải nhập id');
        id.focus();
        return false;
    } else if (name.value == '') {
        alert('Phải nhập Tên');
        name.focus();
        return false;
    } else if (price.value == '') {
        alert('Phải nhập Giá');
        price.focus();
        return false;
    } else if (cate.value == '') {
        alert('Phải nhập loại hàng');
        cate.focus();
        return false;
    } else if (vote.value == '') {
        alert('Phải nhập đánh giá');
        vote.focus();
        return false;
    } else if (discount.value < 0 || discount.value > 100) {
        alert('Phải nhập giảm giá (từ 0 sao tới 100%)');
        discount.focus();
        return false;
    } else if (commingsoon.value == 3) {
        alert('Phải chọn sắp nhập (có hoặc không)');
        commingsoon.focus();
        return false;
    } else if (news.value == 3) {
        alert('Phải chọn Mới (có hoặc không)');
        news.focus();
        return false;
    }
    return true;
}

function checkAddPro() {
    const danhmuc = document.getElementById('danhmuc');
    const photo = document.getElementById('photo');
    const name = document.getElementById('name');
    const price = document.getElementById('price');
    const vote = document.getElementById('vote');
    const discount = document.getElementById('discount');
    const commingsoon = document.getElementById('commingsoon');
    const news = document.getElementById('new');
    // const detail = document.getElementById('detail');
    if (danhmuc.value == 0) {
        alert('Phải chọn danh mục');
        danhmuc.focus();
        return false;
    } else if (photo.value == '') {
        alert('Phải Chọn Ảnh');
        photo.focus();
        return false;
    } else if (name.value == '') {
        alert('Phải nhập Tên');
        name.focus();
        return false;
    } else if (price.value == '') {
        alert('Phải nhập Giá');
        price.focus();
        return false;
    } else if (vote.value == '' || vote.value > 5 || vote.value < 1) {
        alert('Phải nhập đánh giá (từ 1 sao tới 5 sao)');
        vote.focus();
        return false;
    } else if (discount.value < 0 || discount.value > 100) {
        alert('Phải nhập giảm giá (từ 0 sao tới 100%)');
        discount.focus();
        return false;
    } else if (commingsoon.value == 3) {
        alert('Phải chọn sắp nhập (có hoặc không)');
        commingsoon.focus();
        return false;
    } else if (news.value == 3) {
        alert('Phải chọn Mới (có hoặc không)');
        news.focus();
        return false;
    } else if (detail.value == '') {
        alert('Phải nhập chi tiết sản phẩm');
        detail.focus();
        return false;
    }
    return true;
}