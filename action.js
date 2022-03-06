document.getElementById("a").onclick = function(){
    document.getElementById("aa").innerHTML = "CSC 310-INTERNET PROGRAMMING - 3 UNITS";
}
document.getElementById("b").onclick = function(){
    document.getElementById("bb").innerHTML = "CSC 311-DATA STRUCTURES - 3 UNITS";
}
document.getElementById("c").onclick = function(){
    document.getElementById("cc").innerHTML = "CSC 312-MICROSOFT EXCEL - 2 UNITS";
}
document.getElementById("d").onclick = function(){
    document.getElementById("dd").innerHTML = "CSC 313-MICROSOFT WORD - 3 UNITS";
}
document.getElementById("e").onclick = function(){
    document.getElementById("ee").innerHTML = "CSC 314-CYBERSECURITY- 3 UNITS";
}
document.getElementById("f").onclick = function(){
    document.getElementById("ff").innerHTML = "CSC 315-DATABASE PROGRAMMING - 2 UNITS";
}
document.getElementById("g").onclick = function(){
    document.getElementById("gg").innerHTML = "CSC 316-JAVA PROGRAMMING - 3 UNITS";
}
document.getElementById("h").onclick = function(){
    document.getElementById("hh").innerHTML = "CSC 317-R PROGRAMMING - 2 UNITS";
}
document.getElementById("i").onclick = function(){
    document.getElementById("ii").innerHTML = "CSC 318-LINEAR ALGEBRA - 2 UNITS";
}
document.getElementById("j").onclick = function(){
    document.getElementById("jj").innerHTML = "CSC 319-OPERATION RESEARCH - 2 UNITS";
}
document.getElementById("k").onclick = function(){
    document.getElementById("kk").innerHTML = "GST 311-PHILOSOPHY - 2 UNITS";
}



/*
a.addEventListener('click',function(e){
    document.getElementById("aa").innerHTML = "";
}
b.addEventListener('click',function(e){
    document.getElementById("bb").innerHTML = "";
}
c.addEventListener('click',function(e){
    document.getElementById("cc").innerHTML = "";
}
d.addEventListener('click',function(e){
    document.getElementById("dd").innerHTML = "";
}
var historys = document.querySelector('.calc-history');
var result = document.querySelector('.output-container p');
var button = document.querySelector('.no');
var equal = document.querySelector('.no-equal');

var divide = document.querySelector('.divide');
var multiply = document.querySelector('.multiply');
var plus = document.querySelector('.plus');
var minus = document.querySelector('.minus');
var ac = document.querySelector('.ac');
var c = document.querySelector('.c');

var res;
var firstnumber = '';
var secondnumber = ''
var sign;

function calculate(x)
{
    if(!sign)
    {
        firstnumber+=x;
        result.innerHTML = firstnumber;
    }
    else
    {
        secondnumber+=x;
        result.innerHTML = secondnumber;
       // historys.innerHTML += firstnumber+" "+" "+sign+" "+secondnumber;
    }
    console.log(firstnumber+" "+ secondnumber);
}
ac.addEventListener('click',function(e)
{
    historys.innerHTML = "";
    result.innerHTML = "";
    firstnumber = secondnumber = sign = res = "";
})
c.addEventListener('click',function(e)
{
    if(secondnumber)
    {
        secondnumber="";
    }
    else if(firstnumber)
    {
        firstnumber = "";
    }
    result.innerHTML = "";
})
equal.addEventListener('click',function(e)
{
    let fnum = parseInt(firstnumber);
    let snum = parseInt(secondnumber);

    if(!res)
    {
        historys.innerHTML += firstnumber + " "+" "+sign+" "+secondnumber;
    }
    else{
        historys.innerHTML += " "+sign+" "+secondnumber;
    }
    switch(sign)
    {
        case "+":
             res = fnum + snum;
             break;
        case "-":
            res = fnum - snum;
            break;
        case "/":
            res = fnum / snum;
            break;
        case "x":
            res = fnum * snum;
            break;
        default:
            break;
    }

    result.innerHTML = res;

})

divide.addEventListener('click',function(e)
{
    e.preventDefault();
    sign = "/";

    if(res)
    {
        firstnumber = res;
        secondnumber = "";
    }
})
multiply.addEventListener('click',function(e)
{
    e.preventDefault();
    sign = "x";

    if(res)
    {
        firstnumber = res;
        secondnumber = "";
    }
})
plus.addEventListener('click',function(e)
{
    e.preventDefault();
    sign = "+";

    if(res)
    {
        firstnumber = res;
        secondnumber = "";
    }
})
minus.addEventListener('click',function(e)
{
    e.preventDefault();
    sign = "-";

    if(res)
    {
        firstnumber = res;
        secondnumber = "";
    }
})*/
