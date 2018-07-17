

let div=document.querySelector('.empty');
let output=document.getElementsByTagName('script')[8];

//Le codemirror
var editor = CodeMirror(document.getElementById('codeeditor'),{
    value: "//"+"Type a paragraph with hello  here",
    mode: "Html",
    tabSize: 5,
    lineNumbers: true,
    extraKeys:{"Shift-Space":"autocomplete"}
});

//Changer et comparer la valeur dans codemirror
function update(){
  //console.log(document.getElementsByTagName('span')[0].innerHTML);
  user_value=document.getElementsByTagName('span')[0].innerHTML;
  editor.options.value=user_value;
  output.innerHTML=editor.getValue();
  div.innerHTML=editor.getValue();
  console.log(div.children[0]);
  if (div.children[0].localName=='p') {
    document.getElementsByTagName('h2')[0].innerHTML='bravo';
  }else {
    document.getElementsByTagName('h2')[0].innerHTML='recommence';
  }
}

// Produire un output



document.getElementsByTagName('button')[0].addEventListener('click',update);
