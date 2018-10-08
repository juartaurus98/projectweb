function tabTinTuc() {
    //ẩn content, xóa màu nền và borderleft các tab khác
    document.getElementById("baocao").style = "background-color: inherit;border: none;";
    document.getElementById("trogiup").style = "background-color: inherit;border: none";
    document.getElementById("caidat").style = "background-color: inherit;border: none;";
    document.getElementById("baocao-content").style.display = "none";
    document.getElementById("trogiup-content").style.display = "none";
    document.getElementById("caidat-content").style.display = "none";
    //hiện thị content baocao, màu mền, borderleft
    document.getElementById("tintuc-content").style = "display: block";
    document.getElementById("tintuc").style = "background-color: #3c3b54;border-left: 3px solid #6f6da7;"
}

function tabBaoCao() {
    //ẩn content, xóa màu nền và borderleft các tab khác
    document.getElementById("tintuc").style = "background-color: inherit;border: none;";
    document.getElementById("trogiup").style = "background-color: inherit;border: none";
    document.getElementById("caidat").style = "background-color: inherit;border: none;";
    document.getElementById("tintuc-content").style.display = "none";
    document.getElementById("trogiup-content").style.display = "none";
    document.getElementById("caidat-content").style.display = "none";
    //hiện thị content baocao, màu mền, borderleft
    document.getElementById("baocao-content").style = "display: block";
    document.getElementById("baocao").style = "background-color: #3c3b54;border-left: 3px solid #6f6da7;"
}

function tabTroGiup() {
    //ẩn content, xóa màu nền và borderleft các tab khác
    document.getElementById("tintuc").style = "background-color: inherit;border: none;";
    document.getElementById("baocao").style = "background-color: inherit;border: none";
    document.getElementById("caidat").style = "background-color: inherit;border: none;";
    document.getElementById("tintuc-content").style.display = "none";
    document.getElementById("baocao-content").style.display = "none";
    document.getElementById("caidat-content").style.display = "none";
    //hiện thị content baocao, màu mền, borderleft
    document.getElementById("trogiup-content").style = "display: block";
    document.getElementById("trogiup").style = "background-color: #3c3b54;border-left: 3px solid #6f6da7;"
}

function tabCaiDat() {
    //ẩn content, xóa màu nền và borderleft các tab khác
    document.getElementById("tintuc").style = "background-color: inherit;border: none;";
    document.getElementById("trogiup").style = "background-color: inherit;border: none";
    document.getElementById("baocao").style = "background-color: inherit;border: none;";
    document.getElementById("tintuc-content").style.display = "none";
    document.getElementById("trogiup-content").style.display = "none";
    document.getElementById("baocao-content").style.display = "none";
    //hiện thị content baocao, màu mền, borderleft
    document.getElementById("caidat-content").style = "display: block";
    document.getElementById("caidat").style = "background-color: #3c3b54;border-left: 3px solid #6f6da7;"
}