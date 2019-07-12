<<<<<<< HEAD
$(document).ready(function () {
=======
$(document).ready(function() {
    $.post("../php/limit.php", function(data) {
        if (data == "0") {
            alert("你没有权限访问本页面");
            window.location.href = "../html/login.html";
        }
    });
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
    $('.sidebar').load('../html/footer.html');
    var $objimg_1 = $("#img_1");
    var $objhome_p1 = $("#home_p1");
    var $objskill_1 = $("#skill_1");
<<<<<<< HEAD
    $.post("../php/home.php", function (data) {
        var a=eval(data);
=======
    $.post("../php/home.php", function(data) {
        var a = eval(data);
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
        //console.log(data);
        /*for(i=0;i<a.length();i++){

        }*/
<<<<<<< HEAD
        $na=a[0]["name"]+a[0]["watch"]+"个观测点"+a[0]["hot"]+"个热点";
        $objhome_p1.text($na);//修改文字
        //console.log(a[0]['image']);
        //document.getElementById("img_1").src=a[0]['image'];
        $objimg_1.attr('src',a[0]['image']);//修改图片
        // 修改进度条宽度，已观测热点除以总热点
        //$objskill_1.css('width','');
        
=======
        $na = a[0]["name"] + a[0]["watch"] + "个观测点" + a[0]["hot"] + "个热点";
        $objhome_p1.text($na); //修改文字
        //console.log(a[0]['image']);
        //document.getElementById("img_1").src=a[0]['image'];
        $objimg_1.attr('src', a[0]['image']); //修改图片
        // 修改进度条宽度，已观测热点除以总热点
        //$objskill_1.css('width','');

>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
    });
})