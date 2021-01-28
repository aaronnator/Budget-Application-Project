function openSlideMenu(){
    document.getElementById("menu").style.width = "250px";
    document.getElementById("content").style.marginLeft = "250px";
}

function closeSideMenu(){
    document.getElementById("menu").style.width = "0";
    document.getElementById("content").style.marginLeft = "0";
}

function calculate(){
    hourlyWage = parseFloat(hourlyWage.value);
    workHours = parseFloat(workHours.value);
    workWeeks = parseFloat(workWeeks.value);

    calcDisplay.value = workWeeks * (workHours * hourlyWage);
}
