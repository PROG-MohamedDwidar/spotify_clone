export function changeCarouselText(position)
{
    var curCarDat = document.getElementById("curCarDat");
    var dat = document.getElementById("d-"+position);
    curCarDat.innerText=dat.innerText;
    console.log(position);
}