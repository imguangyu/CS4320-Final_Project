// // 注册

// Vue.component('item', {
//     template: '<div class="col-sm-4"><div class="panel panel-primary">\
//     <div class="panel-heading">{{ artname }}</div>\
//     <div class="panel-body"><img src="artworks/kongque.jpeg" class="img-responsive" style="width:304px;height:400px;" alt="Image"></div>\
//     <div class="panel-footer"><p class="Desc">{{ artist }}<br> <i>{{ artname }}</i><br>{{ artcate }}<br> {{ artsize }} </p>\
//         <div style="text-align: center;">\
//         <button type="button" class="btn btn-primary" ><span class="icon-thumbs-up"></span> Like</button>\
//         <button type="button" class="btn btn-danger" ><span class="icon-basket"></span> order</button></div></div></div></div>',
    
//     data: function(){
//         return {
//             artname : 'abc',
//             artist : 'Weiluo',
//             artcate : 'Digital painting',
//             artsize : '18 X 22(300 dpi)'
//         }
//     }
// })
var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    }
  })
// // 创建根实例
// new Vue({
// el: '#one'
// })