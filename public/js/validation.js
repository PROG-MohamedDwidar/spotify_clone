function validateAmount(){
    let error=document.getElementById('amountError');
    let val=document.getElementById('amount').value;
    console.log(val);
    if(parseInt(val)>0){
        error.innerText="";
        return true
    }
    else{
        error.innerText="must be more than zero"
        return false;
    }

}
function validateCard(){
    let error=document.getElementById('cardNumError');
    let val=document.getElementById('cnum').value;
    console.log(val);
    if(val.length==16){
        error.innerText="";
        return true;
    }
    else{
        error.innerText="card number is 16 digits"
        return false;
    }
}
function validateName(){
    let error=document.getElementById('nameError');
    let val=document.getElementById('name').value;
    //console.log(val);
    if(val.length!=0){
        error.innerText="";
        return true;
    }
    else{
        error.innerText="Must not be empty";
        return false;
    }
}
function validateMonth(){
    let error=document.getElementById('monthError');
    let val=document.getElementById('cexpm').value;
    console.log(val);
    if(parseInt(val)>=1 && parseInt(val)<=12){
        error.innerText="";
        return true
    }
    else{
        error.innerText="Not a valid month"
        return false;
    }
}
function validatePin(){
    let error=document.getElementById('pinError');
    let val=document.getElementById('password').value;
    //console.log(val);
    if(val.length==3){
        error.innerText="";
        return true;
    }
    else{
        error.innerText="Must be three digits";
        return false;
    }
}
function donateFormValidate(){
    return validateAmount() && validateCard() && validateName() && validateMonth() && validatePin();
}




function play(icon){
    console.log(icon.firstChild.className)
    if(icon.firstChild.className.includes("play")){
        icon.firstChild.className=icon.firstChild.className.replace(/play/,"pause")
    }else{
        icon.firstChild.className=icon.firstChild.className.replace(/pause/,"play")
    }
}