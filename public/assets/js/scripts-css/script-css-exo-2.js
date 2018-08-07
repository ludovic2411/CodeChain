let style_tag=document.getElementsByTagName('style')[0];
let area=document.querySelector('.empty');
let body=document.body;
let form=document.querySelector('.exo__form');
form.style.visibility="hidden";

let item_1=document.querySelector('.item-1');
let item_2=document.querySelector('.item-2');
let item_3=document.querySelector('.item-3');
let item_4=document.querySelector('.item-4');
let item_5=document.querySelector('.item-5');
let item_6=document.querySelector('.item-6');


var editor = CodeMirror(document.getElementById('codeeditor'),{
    value: "/* Make a grid with 2 rows and 3 columns.\rThe div for the entire grid is named .empty\r Place numbers in reverse order\r (each number has its classname). pair with orange background and unpairs with pink background */",
    mode: "css",
    tabSize: 5,
    lineNumbers: true,
    extraKeys:{"Shift-Space":"autocomplete"}
});

function update(){
  style_tag.innerHTML=editor.getValue();
   let columns=window.getComputedStyle(area,null).getPropertyValue( 'grid-template-columns');
   let rows=window.getComputedStyle(area,null).getPropertyValue('grid-template-rows');

   let row_1=window.getComputedStyle(item_1,null).getPropertyValue('grid-row-start');
   let column_1=window.getComputedStyle(item_1,null).getPropertyValue('grid-column-start');
   let color_1=window.getComputedStyle(item_1,null).getPropertyValue('background-color');

   let row_2=window.getComputedStyle(item_2,null).getPropertyValue('grid-row-start');
   let column_2=window.getComputedStyle(item_2,null).getPropertyValue('grid-column-start');
   let color_2=window.getComputedStyle(item_2,null).getPropertyValue('background-color');

   let row_3=window.getComputedStyle(item_3,null).getPropertyValue('grid-row-start');
   let column_3=window.getComputedStyle(item_3,null).getPropertyValue('grid-column-start');
   let color_3=window.getComputedStyle(item_3,null).getPropertyValue('background-color');

   let row_4=window.getComputedStyle(item_4,null).getPropertyValue('grid-row-start');
   let column_4=window.getComputedStyle(item_4,null).getPropertyValue('grid-column-start');
   let color_4=window.getComputedStyle(item_4,null).getPropertyValue('background-color');

   let row_5=window.getComputedStyle(item_5,null).getPropertyValue('grid-row-start');
   let column_5=window.getComputedStyle(item_5,null).getPropertyValue('grid-column-start');
   let color_5=window.getComputedStyle(item_5,null).getPropertyValue('background-color');

   let row_6=window.getComputedStyle(item_6,null).getPropertyValue('grid-row-start');
   let column_6=window.getComputedStyle(item_6,null).getPropertyValue('grid-column-start');
   let color_6=window.getComputedStyle(item_6,null).getPropertyValue('background-color');

   if (columns=='319.667px 319.667px 319.667px' && rows=='57.4333px 57.4333px' && row_1=="2" && column_1=="3"
    && row_2=="2" && column_2=="2" && row_3=="2" && column_3=="1" && row_4=="1" && column_4=="3" && row_5=="1"
      && column_5=="2" && row_6=="1"&& column_6=="1" && color_1=="rgb(255, 192, 203)" && color_2=="rgb(255, 165, 0)"
      && color_3=="rgb(255, 192, 203)"&& color_4=="rgb(255, 165, 0)"&& color_5=="rgb(255, 192, 203)"&&color_6=="rgb(255, 165, 0)") {
     document.getElementsByTagName('h2')[0].innerHTML='bravo';
     form.style.visibility="visible";
   }

}

function hint(){
  document.getElementById('codeeditor').style.display='none';
  let soluce_editor = CodeMirror(document.getElementById('soluce_editor'),{
      value: '.empty{\r\tdisplay:grid;\r\tgrid-template-columns:repeat(3,1fr);\r\tgrid-template-rows:repeat(2,1fr);\r}'
      +'\r.item-1{\r\tgrid-column: 3;\r\tgrid-row:2;\r\tbackground-color:pink;\r\t}'
      +'\r.item-2{\r\tgrid-column:2;\r\tgrid-row:2;\r\tbackground-color:orange;\r\t}'
      +'\r.item-3{\r\tgrid-column:1;\r\tgrid-row:2;\r\tbackground-color:pink;\r\t}'
      +'\r.item-4{\r\tgrid-column:3;\r\tgrid-row:1;\r\tbackground-color:orange;\r\t}'
      +'\r.item-5{\r\tgrid-column:2;\r\tgrid-row:1;\r\tbackground-color:pink;\r\t}'
      +'\r.item-6{\r\tgrid-column:1;\r\tgrid-row:1;\r\tbackground-color:orange;\r\t}',
      mode: "css",
      tabSize: 5,
      lineNumbers: true,
      extraKeys:{"Shift-Space":"autocomplete"}
  });

  style_tag.innerHTML=soluce_editor.getValue();
  let style_applied=window.getComputedStyle(body,null).getPropertyValue('background-color');
  form.style.visibility="visible";
}
document.getElementsByTagName('button')[1].addEventListener('click',hint)
document.getElementsByTagName('button')[0].addEventListener('click',update);
