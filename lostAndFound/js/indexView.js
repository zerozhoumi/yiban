var bloomingMenu = new BloomingMenu({
    startAngle: 180,
    endAngle: 270,
    radius: 100,
    itemsNum: 3,
    itemAnimationDelay: 0.08,

});
bloomingMenu.render();

bloomingMenu.props.elements.items.forEach(function (item, index) {
    item.addEventListener('click', function () {
        var arr=["lost.html","myList.html","index.html"];
        window.open(arr[index],'_self');
    })
});

//Prevents "elastic scrolling" on Safari
document.addEventListener('touchmove', function(event) {
    'use strict'
    event.preventDefault()
});

layui.use('laypage', function(){
    var laypage = layui.laypage;

    //执行一个laypage实例
    laypage.render({
        elem: 'pageNum' //注意，这里的 test1 是 ID，不用加 # 号
        ,count: 20 //数据总数，从服务端得到
    });
});
//tab的切换
layui.use('element', function(){
    var element = layui.element;

    //…
});
//数据表模块
// layui.use('table', function(){
//
//     var table = layui.table;
//
// });
var infoArr=myinfo;
$("#content").append(infoArr[1]);

function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
setCookie("info",infoArr,7);
