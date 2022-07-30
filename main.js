let div1 = document.getElementById("oned");
let div2 = document.getElementById("twod");
let div3 = document.getElementById("threed");
let show1 = document.getElementById("d-1");
let show2 = document.getElementById("d-2");
let show3 = document.getElementById("d-3");

show1.onclick = function(){
    div1.style.display = 'flex';
    div2.style.display = 'none';
    div3.style.display = 'none';

}
show2.onclick = function(){
    div2.style.display = 'flex';
    div3.style.display = 'none';
    div1.style.display = 'none';

}
show3.onclick = function(){
    div3.style.display = 'flex';
    div2.style.display = 'none';
    div1.style.display = 'none';

}

let bag = document.getElementById("bog");
let show_bag = document.getElementById("sbag");
let exit_bag = document.getElementById("exit");
show_bag.onclick = function(){
    bag.style.opacity = 1;
}
exit_bag.onclick = function(){
    bag.style.opacity = 0;
}

let select = document.getElementById("selecto");
let add_select = document.getElementById("addo");
add_select.onclick = function(){
    select.style.opacity = 1;
}




/*let div_cur = document.getElementById("div-cur");
let show_cur = document.getElementById("cur");

show_cur.onclick = function(){
    div_cur.style.display = "block";
    
}*/

let icon = document.getElementById("dark");
icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
}



 
