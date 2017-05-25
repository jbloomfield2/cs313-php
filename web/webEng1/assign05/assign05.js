
function loadFocus() {
    document.getElementById("fName").focus();
    var i = 0;
    document.getElementById("total").value = i.toFixed(2);
}

function resetErrors()
{
    document.getElementById("error").innerHTML = "";
    var labels = document.getElementsByTagName("label")

    for (i = 0; i < labels.length; i++)
    {
        labels[i].style.color = "black";
    }
}

function validate()
{
    resetErrors();
    var error = document.getElementById("error");
    var fName = document.getElementById("fName");
    var lName = document.getElementById("lName");
    var addr = document.getElementById("addr");

    if (fName.value == "")
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lFname").style.color = "red";
    }

    if (lName.value == "")
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lLname").style.color = "red";
    }

    if (addr.value == "") {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lAddr").style.color = "red";
    }

    var pnum = document.getElementById("phone");
    var pattern = /\d{3}-\d{3}-\d{4}/;
    if (!pnum.value.match(pattern))
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lPhone").style.color = "red";
    }

    var radios = document.getElementsByName("card")
    if (!radios[0].checked && !radios[1].checked && !radios[2].checked) 
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lCard").style.color = "red";
    }

    var cardNum = document.getElementById("cardNum").value;

    if (isNaN(cardNum) ||cardNum.length != 16)
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("lCardNum").style.color = "red";
    }

    var expMo = document.getElementById("expMo").value;
    var expYear = document.getElementById("expYear").value;

    if (isNaN(expMo) || expMo < 1 || expMo > 12)
    {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("exp").style.color = "red";
    }

    if (isNaN(expYear) || expYear< 2017 || expMo > 2030) {
        error.innerHTML = "An error Occured. please correct the highlighted fields";
        document.getElementById("exp").style.color = "red";
    }

    if (error.innerHTML == "")
        return true;
    else
        return false;
}

function updateTotal()
{
    var check1 = document.getElementById("item1");
    var check2 = document.getElementById("item2");
    var check3 = document.getElementById("item3");
    var check4 = document.getElementById("item4");

    var subtotal = 0;

    if (check1.checked)
        subtotal += 235.99;
    if (check2.checked)
        subtotal += 109.99;
    if (check3.checked)
        subtotal += 79.99;
    if (check4.checked)
        subtotal += 189.99;

    document.getElementById("total").value = subtotal.toFixed(2);

}