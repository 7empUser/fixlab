function menuToggle() {
    document.getElementById("headerList").classList.toggle("show");
}
function changeMenu(paramId) {
    document.getElementById("diagnostics").classList.add("shopHidden");
    document.getElementById("repairCharging").classList.add("shopHidden");
    document.getElementById("repairAfterWater").classList.add("shopHidden");
    document.getElementById("repairPlatform").classList.add("shopHidden");
    document.getElementById("repairSimCart").classList.add("shopHidden");
    document.getElementById("repairDispley").classList.add("shopHidden");
    document.getElementById("repairBattery").classList.add("shopHidden");
    document.getElementById("repairSpeaker").classList.add("shopHidden");
    document.getElementById("repairMicrophone").classList.add("shopHidden");
    document.getElementById(paramId).classList.remove("shopHidden");
}