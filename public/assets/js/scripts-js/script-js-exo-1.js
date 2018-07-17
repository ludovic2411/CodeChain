
let output=document.getElementsByTagName('script')[8];
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
  if (document.getElementsByTagName('h2')[0].innerHTML!="Comment tu t'appelles?") {
    document.getElementsByTagName('h1')[0].innerHTML="well done"
  }
}

// Produire un output



document.getElementsByTagName('button')[0].addEventListener('click',update);
