function find(){
    document.getElementById('find').style.backgroundColor = 'black';
  	document.getElementById('find').style.color = 'white';
    document.getElementById('editor').style.backgroundColor = "#cecece";
    document.getElementById('editor').style.color = 'black';
    document.getElementById('settings').style.backgroundColor = "#cecece";
  	document.getElementById('settings').style.color = 'black';

  	// document.getElementById('block-login').style.display = "";
   //  document.getElementById('block-register').style.display = "none";
  	// document.getElementById('block-register').style.display = "none";

  }

function editor(){
    document.getElementById('editor').style.backgroundColor = 'black';
    document.getElementById('editor').style.color = 'white';
    document.getElementById('find').style.backgroundColor = "#cecece";
    document.getElementById('find').style.color = 'black';
    document.getElementById('settings').style.backgroundColor = "#cecece";
    document.getElementById('settings').style.color = 'black';

    // document.getElementById('block-register').style.display = "";
    // document.getElementById('block-login').style.display = "none";  
    // document.getElementById('block-login').style.display = "none";  
  }

function settings(){
    document.getElementById('settings').style.backgroundColor = 'black';
  	document.getElementById('settings').style.color = 'white';
    document.getElementById('find').style.backgroundColor = "#cecece";
    document.getElementById('find').style.color = 'black';
    document.getElementById('editor').style.backgroundColor = "#cecece";
  	document.getElementById('editor').style.color = 'black';

  	// document.getElementById('block-register').style.display = "";
   //  document.getElementById('block-login').style.display = "none";  
  	// document.getElementById('block-login').style.display = "none";	
  }


function show() { 
    var tmp = "";
    var id = document.getElementById("id").value;
    var fio = document.getElementById("fio").value;
    var article = document.getElementById("article").value;
    var hash = document.getElementById("hash").value;
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