function find(){
 localStorage.setItem('klad', 'find');
    document.getElementById('find').style.backgroundColor = 'black';
    document.getElementById('find').style.color = 'white';
    document.getElementById('editor').style.backgroundColor = "#cecece";
    document.getElementById('editor').style.color = 'black';
    document.getElementById('settings').style.backgroundColor = "#cecece";
    document.getElementById('settings').style.color = 'black';
    document.getElementById('find-block').style.display = "";  
    document.getElementById('editor-block').style.display = "none";
    document.getElementById('settings-block').style.display = "none"; 
  }

function editor(){
 localStorage.setItem('klad', 'editor');
    document.getElementById('editor').style.backgroundColor = 'black';
    document.getElementById('editor').style.color = 'white';
    document.getElementById('find').style.backgroundColor = "#cecece";
    document.getElementById('find').style.color = 'black';
    document.getElementById('settings').style.backgroundColor = "#cecece";
    document.getElementById('settings').style.color = 'black';
    document.getElementById('editor-block').style.display = "";
    document.getElementById('find-block').style.display = "none";  
    document.getElementById('settings-block').style.display = "none";  
  }

function settings(){
 localStorage.setItem('klad', 'settings');
    document.getElementById('settings').style.backgroundColor = 'black';
    document.getElementById('settings').style.color = 'white';
    document.getElementById('find').style.backgroundColor = "#cecece";
    document.getElementById('find').style.color = 'black';
    document.getElementById('editor').style.backgroundColor = "#cecece";
    document.getElementById('editor').style.color = 'black';
    document.getElementById('settings-block').style.display = ""; 
    document.getElementById('editor-block').style.display = "none";
    document.getElementById('find-block').style.display = "none";  
  }

function reg() {
    var log = document.getElementById("reg_log");
    var pas = document.getElementById("reg_pas");
    if (pas.value.length<8){
      log.style.border="1px solid #A4A4A4"
      pas.style.border="2px solid red"
      alert("Пароль меньше 8 символов");  
    } else{
      if(log.value.length<8){
        pas.style.border="1px solid #A4A4A4"
        log.style.border="2px solid red"
        alert("Логин меньше 8 символов"); } else {
          log.style.border="1px solid #A4A4A4"
          
          xmlhttp=new XMLHttpRequest();
          xmlhttp.open("GET","script/log-reg.php?reg_log="+log.value+"&reg_pas="+pas.value,true);
          xmlhttp.send();
        }
    }
}

function login() {
    var log = document.getElementById("log_log");
    var pas = document.getElementById("log_pas");
    if (pas.value.length<8 && pas.value!="admin"){
      log.style.border="1px solid #A4A4A4"
      pas.style.border="2px solid red"
      alert("Пароль меньше 8 символов");  
    } else{
      if(log.value.length<8 && log.value!="admin") {
        pas.style.border="1px solid #A4A4A4"
        log.style.border="2px solid red"
        alert("Логин меньше 8 символов"); } else {
          log.style.border="1px solid #A4A4A4"
          
          $.ajax({
            type: "GET",
            url: "script/log-reg.php",
            data: { log_log: log.value, log_pas: pas.value },
            success: function(data) {
              if (data == "да") {console.log('Вошли'); window.location.reload();}
              if (data == "не") {alert('Не верный логин или пароль')}   
            }
          });   
      }
    }
}


function show() { 
    var tmp = "";
    var id = document.getElementById("id").value;
    var fio = document.getElementById("fio").value;
    var article = document.getElementById("article").value;
    var hash = document.getElementById("hash").value;
    if (isNaN(id)) {alert("Вы ввели ID не число"); return;}
    if (fio.length >30) {alert("Введённое ФИО через чур гиганское"); return;}
    if (article.length >30) {alert("Введённая статья через чур гиганская"); return;}
    if (hash.length >72) {alert("Введённый отпечаток через чур гиганский"); return;}
    
    if(id!='') tmp=tmp+"id="+id+"&";
    if(fio!='') {tmp=tmp+"fio="+fio+"&";} 
    if(article!=''){tmp=tmp+"article="+article+"&";}
    if(hash!='') {tmp=tmp+"hash="+hash;} 
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("table-after-search").innerHTML=this.responseText;
    }
  }

  xmlhttp.open("GET","script/table_find.php?"+tmp,true); //?eda="+str
  xmlhttp.send();
  // console.log(evt.item);
  //$("#eda").val(""); 
  };