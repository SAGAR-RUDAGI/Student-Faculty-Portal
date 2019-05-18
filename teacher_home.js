var index = 1;
function addRow(){
  var sname = document.getElementById("studentName").value;
  var atd = document.getElementById("attended").value;
  var total = document.getElementById("total").value;
  var cie = document.getElementById("cie").value;
  var see = document.getElementById("see").value;
  var table = document.getElementsByTagName('table')[0];
  var newRow = table.insertRow(2);
  var cel1 = newRow.insertCell(0);
  var cel2 = newRow.insertCell(1);
  var cel3 = newRow.insertCell(2);
  var cel4 = newRow.insertCell(3);
  var cel5 = newRow.insertCell(4);
  cel1.innerHTML = sname;
  cel1.name = 'studentName' + index;
  var t2=document.createElement("input");
  t2.id = "attended"+index;
  t2.name = 'attended' + index;
  t2.value = atd;
  cel2.appendChild(t2);
  var t3=document.createElement("input");
  t3.id = "total"+index;
  t3.name = 'total' + index;
  t3.value = total;
  cel3.appendChild(t3);
  var t4=document.createElement("input");
  t4.id = "cie"+index;
  t4.name = 'cie' + index;
  t4.value = cie;
  cel4.appendChild(t4);
  var t5=document.createElement("input");
  t5.id = "see"+index;
  t5.name = 'see' + index;
  t5.value = see;
  cel5.appendChild(t5);
  index++;
}
var input = document.getElementById("see");

input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("myBtn").click();
    document.getElementById("studentName").value="";
    document.getElementById("attended").value="";
    document.getElementById("total").value="";
    document.getElementById("cie").value="";
    document.getElementById("see").value="";
  }
});
