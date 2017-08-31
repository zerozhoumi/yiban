//数据表模块
layui.use('table', function(){


var table = layui.table;


});
function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++)
    {
        var c = ca[i].trim();
        if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}
console.log(getCookie("info"));
$("#name").append(getCookie("info")[1]);