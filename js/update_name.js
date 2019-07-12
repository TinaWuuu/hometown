<<<<<<< HEAD

var $objupdate_name = $("#update_name");//修改用户名
var $objyes = $("#yes");//修改用户名
// $objupdate_name.onblur(function (){
//     console.log($objupdate_name.val();
// });
$objyes.click(function () {
=======
$.post("../php/limit.php", function(data) {
    if (data == "0") {
        alert("你没有权限访问本页面");
        window.location.href = "../html/login.html";
    }
});
var $objupdate_name = $("#update_name"); //修改用户名
var $objyes = $("#yes"); //修改用户名
// $objupdate_name.onblur(function (){
//     console.log($objupdate_name.val();
// });
$objyes.click(function() {
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
    console.log($objupdate_name.val());
    data = {};
    data.name = $objupdate_name.val();
    // console.log(data);
<<<<<<< HEAD
    $.post("../php/update_name.php", data, function (data) {
        if (data == "1") {
            alert("修改成功");
            window.location.href = "../html/mine.html";
        }
        else {
=======
    $.post("../php/update_name.php", data, function(data) {
        if (data == "1") {
            alert("修改成功");
            window.location.href = "../html/mine.html";
        } else {
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
            alert("修改失败");
            window.location.href = "../html/update_name.html";
        }
    });
<<<<<<< HEAD
});

=======
});
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
