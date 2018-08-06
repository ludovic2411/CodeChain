
let style_tag=document.getElementsByTagName('style')[0];
let area=document.querySelector('.empty');
let body=document.body;
let form=document.querySelector('.form__exo');
form.style.visibility="hidden";

console.log(body);
console.log(style_tag);


var editor = CodeMirror(document.getElementById('codeeditor'),{
    value: "/* color the background-color of the body element in orange */",
    mode: "css",
    tabSize: 5,
    lineNumbers: true,
    extraKeys:{"Shift-Space":"autocomplete"}
});

function update(){
  style_tag.innerHTML=editor.getValue();
  let style_applied=window.getComputedStyle(body,null).getPropertyValue('background-color');
  if (style_applied=='rgb(255, 165, 0)') {
      document.getElementsByTagName('h2')[0].innerHTML='bravo!';
      form.style.visibility="visible";
  }else {
    document.getElementsByTagName('h2')[0].innerHTML='presque';
    console.log(style_applied);
  }
}

function hint(){
  document.getElementById('codeeditor').style.display='none';
  let soluce_editor = CodeMirror(document.getElementById('soluce_editor'),{
      value: 'body{\r\tbackground-color:orange;\r\t}',
      mode: "css",
      tabSize: 5,
      lineNumbers: true,
      extraKeys:{"Shift-Space":"autocomplete"}
  });

  style_tag.innerHTML=soluce_editor.getValue();
  let style_applied=window.getComputedStyle(body,null).getPropertyValue('background-color');
  if (style_applied=='rgb(255, 165, 0)') {
      document.getElementsByTagName('h2')[0].innerHTML='bravo!';
      form.style.visibility="visible";
  }else {
    document.getElementsByTagName('h2')[0].innerHTML='presque';
    console.log(style_applied);
  }
}
document.getElementsByTagName('button')[1].addEventListener('click',hint)
document.getElementsByTagName('button')[0].addEventListener('click',update);
