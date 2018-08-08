let output=document.getElementsByTagName('script')[8];
let form=document.querySelector('.exo__form');
form.style.visibility='hidden';
//Le codemirror
let editor = CodeMirror(document.getElementById('codeeditor'),{
    value: "//write ten time hello in a paragraph tag",
    mode: "Javascript",
    tabSize: 5,
    lineNumbers: true,
    extraKeys:{"Shift-Space":"autocomplete"}
});
//Changer et comparer la valeur dans codemirror
function update(){
  output.innerHTML=editor.getValue();
  eval(output.innerHTML);
  console.log(document.querySelector('.empty'));
  if (document.querySelector('.empty').childElementCount==10 && document.querySelector('.empty').children[0].localName=='p' && document.querySelector('.empty').children[0].innerHTML=="hello") {
    document.getElementsByTagName('h2')[0].innerHTML='well done'
    form.style.visibility="visible";
  }else{
    document.getElementsByTagName('h2')[0].innerHTML='try again'
  }
}

// Produire un output

function hint(){
  document.getElementById('codeeditor').style.display='none';
  let soluce_editor = CodeMirror(document.getElementById('soluce_editor'),{
      value: 'for(i=0;i<10;i++){document.querySelector(".empty").innerHTML +="<p>hello</p>";}',
      mode: "Javascript",
      tabSize: 5,
      lineNumbers: true,
      extraKeys:{"Shift-Space":"autocomplete"}
  });
  output.innerHTML=soluce_editor.getValue();
  eval(output.innerHTML);
  form.style.visibility="visible";
}
document.getElementsByTagName('button')[1].addEventListener('click',hint)
document.getElementsByTagName('button')[0].addEventListener('click',update);
