  var form = new Vue({
    el: "#form1",
    data:{
        cardnum: "",
        cardcvc: "",
        cardholder: "",
        artname: "",
        artnum: 1
    },
    methods:{
        submit: function(event){
            var pos = {
              cardnum: this.cardnum,
              cardcvc: this.cardcvc,
              cardholder: this.cardholder,
              artname: this.artname,
              artnum: this.artnum,
              user: 'test',
            };
            axios.post('http://localhost:8889',JSON.stringify(pos)).then(function(res){
                if(res.data.status=="success"){
                    alert(' order complete ');
                    location.replace("./store.html")   ;
                }else{
                    console.log('失败');
                    location.replace("./store.html")   ;
                }
            }).catch(function(err){
                console.log('网络错误');
                location.replace("./store.html")   ;
            })
        }
            
        }
});

$('#orderModal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text('New Order of ' + recipient);
    modal.find('#artname').val(recipient);form.artname = recipient;
    artn = recipient;
  })