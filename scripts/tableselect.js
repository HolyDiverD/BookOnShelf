
var table = document.getElementById('table');
var selected = table.getElementsByClassName('selected');
table.onclick = highlight;

function highlight(e) {
    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
}

function fnselect(){
    var element = document.querySelectorAll('.selected');
    if(element[0]!== undefined){ //it must be selected
        for (let i = 0; i < element[0].children.length; i++) {
            alert(element[0].children[i].textContent);
        }
    }
}

/*function fnselect(){
    var element = document.querySelectorAll('.selected');
    if(element[0]!== undefined){ //it must be selected
        alert(element[0].children[0].firstChild.data);
    }
}
*/




