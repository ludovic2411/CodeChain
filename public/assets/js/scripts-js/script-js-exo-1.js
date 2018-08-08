let output=document.getElementsByTagName('script')[8];
let form=document.querySelector('.exo__form');
form.style.visibility="hidden";
//Le codemirror
var editor = CodeMirror(document.getElementById('codeeditor'),{
    value: "//change the html of the h2 element",
    mode: "Javascript",
    tabSize: 5,
    lineNumbers: true,
    extraKeys:{"Shift-Space":"autocomplete"}
});
//Changer et comparer la valeur dans codemirror
function update(){
  output.innerHTML=editor.getValue();
  eval(output.innerHTML);
  if (document.getElementsByTagName('h2')[0].innerHTML!="Un petit exercice facile?") {
    document.getElementsByTagName('h1')[0].innerHTML="well done"
    form.style.visibility="visible";
  }
}

// Produire un output



document.getElementsByTagName('button')[0].addEventListener('click',update);
