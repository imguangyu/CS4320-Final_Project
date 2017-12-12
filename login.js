var form = new Vue({
    el: "#form1",
    data:{
        username:"",
        password:""
    },
    methods:{
        submit: function(event){
            var pos = {
                username: this.username,
                password: this.password
            };
            axios.post('http://localhost:8889',JSON.stringify(pos)).then(function(res){
                if(res.data.status=="success"){
                    console.log('登录成功');
                    window.location = "./profile.html";
                }else{
                    console.log('失败');
                    window.location = "./login.html";
                }
            }).catch(function(err){
                console.log('网络错误');
                window.location = "./login.html";
            })
        }
            
        }
});