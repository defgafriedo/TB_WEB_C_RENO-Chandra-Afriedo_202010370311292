
function insert(no) {
    document.form1.textview.value = document.form1.textview.value + no;
}

function equal() {
    var a = document.form1.textview.value;
    if (a) {
        document.form1.textview.value = eval(a)
    }
}

function backspace() {
    var a = document.form1.textview.value;
    document.form1.textview.value = exp.substring(0, a.length - 1);
}