var form = new Vue({
    el: "#form1",
    data:{
        username:"",
        password1:"",
        password2:""
    },
    methods:{
        checked: function(){
            if(this.password1 === this.password2)return true;
            return false;
        },

        submit: function(event){
            if(this.checked){
                var pos = {
                    username: this.username,
                    password: this.password1,
                    cate: 'regis'
                };
                axios.post('http://localhost:8889',JSON.stringify(pos)).then(function(res){
                    if(res.data.status=="success"){
                        console.log('注册成功');
                        alert('register success!')
                        window.location = "./login.html";
                    }else{
                        console.log('注册失败');
                        window.location = "./register.html";
                    }
                }).catch(function(err){
                    console.log('网络错误');
                    window.location = "./register.html";
                })
            }
            
        }
            
        }
});