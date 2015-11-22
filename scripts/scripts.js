//Get Infor as Use   
function userStat1(){    
    $.ajax({
          url : '../scripts/php/access_1_user.php',
          type : 'POST',
          dataType:'json',
          success : function(data) {
              document.getElementById("display").innerHTML = "";
             for(var i = 0; i < data.length; i++){                 
                  document.getElementById("display").innerHTML += data[i].id + " | " + data[i].name + " | " + data[i].email + " | " + data[i].number + " | " + data[i].password + "<br>";
             } 
          }
      })
    }

//Get Info as Admin
function userStat2(){
    $.ajax({
          url : '../scripts/php/access_1_admin.php',
          type : 'POST',
          dataType:'json',
          success : function(data) {
              document.getElementById("display").innerHTML = "";
             for(var i = 0; i < data.length; i++){                 
                  document.getElementById("display").innerHTML += data[i].id + " | " + data[i].name + " | " + data[i].email + " | " + data[i].number + " | " + data[i].password + "<br>";
             } 
          }
      })
    }
