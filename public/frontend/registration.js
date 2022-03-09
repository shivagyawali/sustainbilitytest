function orgpro() {
    var OC12 = document.getElementById("oc12a").value;
    var OC13 = document.getElementById("oc13a").value;
    var OD13 =
        Math.round((Number(OC13) / (Number(OC12) + Number(OC13))) * 100) + " %";
    document.getElementById("od13a").innerHTML = OD13;
}
function createItem() {
    var OC12 = document.getElementById("oc12a").value;
    var OC13 = document.getElementById("oc13a").value;
    var OD13 =
        Math.round((Number(OC13) / (Number(OC12) + Number(OC13))) * 100) + " %";
    document.getElementById("od13a").innerHTML = OD13;
    var name = document.getElementById("name").value;
    var datefounded = document.getElementById("datefounded").value;
    var address = document.getElementById("address").value;
    var details = document.getElementById("details").value;
    var phone = document.getElementById("phone").value;
    var sector = document.getElementById("sector").value;
    localStorage.name = name;
    localStorage.datefounded = datefounded;
    localStorage.address = address;
    localStorage.details = details;
    localStorage.phone = phone;
    localStorage.sector = sector;
    localStorage.fullemployees = OC12;
    localStorage.partemployees = OC13;
    localStorage.workforce = OD13;

    setTimeout(() => {
        window.location.href = "/governance";
    }, 3000);
}
