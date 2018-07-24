badges=document.querySelector('.badges_row');



 function high_rank(){
   for (let i = 0; i <badges.children.length;i++) {
      if (badges.children[i].innerHTML>24) {
        badges.children[i].style.color='green';
      }
   }
 }
high_rank();
