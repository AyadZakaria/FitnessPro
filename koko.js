/*let names = (...name) => `String [${name.join("],[")}] => Done !`;
document.write(names("badr","simo","ali"));


let numbers = [20,50,10,60];

let calc = (one,two,...three) => (one+two+three[0]+three[1])-three[0];

document.write(calc(10,60,50,10));

let smia = "baDR";
let sm = smia.split("").map(function(ele){
    return ele === ele.toUpperCase() ? ele.toLowerCase() : ele.toUpperCase();
});
document.write(sm)

let num = [1,-9,-50,44,-6];
let wNum = num.splice("").map(function(ele){
    return ele * - 1
});

document.write(wNum);

let re = "badr22"
let reN = re.split("").filter(function(ele){
    return !isNaN(parseInt(ele));
}).map(function(ele){
    return ele*ele;
});

document.write(reN);*/

//let text = "I love foodd"
//let textN = text.split("").filter(function(ele){
//    return ele.length < 4 ;
//})

//document.write(textN);

/*let pre = ["banana", "Padobanga","Dog", "Jamil","Google"];
let preF = pre.reduce(function(acc,cur){
    return acc.length > cur.length ? acc : cur;
});

document.write(preF);

let str = ["B","@","A","@","D","@","R"];
let strF = str.filter(function(ele){
    return !ele.startsWith("@") ;
}).reduce(function(arr,cur){
    return arr+cur;
});

document.write(strF);


let myString = "1,2,3,4,5,E,L,Z,E,R,O,_,W,E,B,_,S,C,H,O,O,L,0,5"
let final = myString.split("").filter(function(ele){
    return isNaN(parseInt(ele)); 
}).join('').split('_').join(' ');

console.log(final);*/

/*let result = prompt("Saisir un nombre : ");

for(let i= 0;i<=result;i++){
    let myMain = document.createElement("div");
    let myTitle = document.createElement("h1");
    let myTitle2 = document.createElement("h2");
    let myDesc = document.createElement("p");
    myMain.className = "one";
    let myTitleText = document.createTextNode(`Product ${i}`);
    let myTitleText2 = document.createTextNode("2 Piece");
    let myDescText = document.createTextNode("I upload fresh ideas and freebies on daily basis both on Instagram");
    myTitle.appendChild(myTitleText);
    myTitle2.appendChild(myTitleText2);
    myDesc.appendChild(myDescText);
    myMain.appendChild(myTitle);
    myMain.appendChild(myTitle2);
    myMain.appendChild(myDesc);
    document.body.appendChild(myMain);

}*/


function dercarstatus()
{
chaine = new String();
chaine = document.formulaire.saisie.value;
chaine = "le dernier caractere est : " + chaine.charAt(chaine.length - 1);
window.status= chaine;
}

    