$(document).ready(function() {
    $.post("../php/limit.php", function(data) {
        if (data == "0") {
            alert("你没有权限访问本页面");
            window.location.href = "../html/login.html";
        }
    });
    $('.sidebar').load('../html/footer.html');
    var $objtitle = $("#title");
    var $objis_like = $("#is_like");
    var $objtime = $("#time");
    var $objbrowse = $("#browse");
    var $objcomment = $("#comment");
    var $objessay_img = $("#essay_img");
    var $objessay_a1 = $("#essay_a1");
    var $objessay_a2 = $("#essay_a2");

    $.post("../php/essay.php", function(data) {

        var a = eval(data); //js数组
        //console.log(ar); 
        var $b = "../html/essay_next.html?id=" + a[0]['title'];
        var $c = "../html/essay_next.html?id=" + a[0]['title'];
        $objessay_img.attr('src', a[0]['image']); //修改图片
        $objtitle.text(a[0]['title']); //修改题目
        $objessay_a1.attr('href', $b);
        $objessay_a2.attr('href', $c);
        $objtime.text(a[0]['date']); //修改时间
        $objbrowse.text(a[0]['browse']); //修改浏览数
        $objcomment.text(a[0]['comment']); //修改评论数
        if (a[0]['collect'] == "1") {
            $objis_like.attr('src', '../img/like.png'); //修改图片
        }
    });
});