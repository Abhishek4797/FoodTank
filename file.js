var counter = 0;
function changeBG(){
    var imgs = [
        "url(https://images.unsplash.com/photo-1522204605090-c9a2ae146cb3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0147eeb73ae17cd12d9f3d9523ba01a6&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1445847562439-f251c3799ea5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ab8e80c90b3723b6ab5138e1fb86aea6&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1493807742375-fbc46d996e8f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6f0038573a81b1169576b6674a3ce202&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f791b5847ff52ab502255c37c7e78498&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1511688878353-3a2f5be94cd7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=63b44aa6975ca58af1bc9d7edff5981d&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8a5e4cac8bcaf69ffaf5d3b1c2b063e4&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9647d95a500b5e222258fb03ed086ed1&auto=format&fit=crop&w=500&q=60)",
        "url(https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a98ac47048f530b6d587279d52c13ab7&auto=format&fit=crop&w=500&q=60)"
      ]
 
    if(counter === imgs.length) counter = 0;
    $("body").css("background-image", imgs[counter]);

    counter++;
}
  
  setInterval(changeBG, 2000);