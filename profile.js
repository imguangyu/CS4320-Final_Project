axios.post('http://localhost:8889',JSON.stringify({cate:"get"})).then(function(res){
   res = res.data;
   console.log(res);
   let str = "<table><caption>Order Details</caption><tr>\
                <th>Order Number</th>\
                <th>Painting's Name</th>\
                <th>Painting's amount</th>\
                <th>Credit card number</th>\
                </tr>";
   for(let i = 0; i < res.length; ++i){
       str += "<tr><th>" + res[i]._id + "</th><th>" + res[i].artname + "</th><th>" + res[i].artnum + "</th><th>"  + res[i].cardnum + "</th></tr>"
   }
   str += '</table>'
   console.log(str);
   document.getElementById("table").innerHTML = str;
}).catch(function(err){

})