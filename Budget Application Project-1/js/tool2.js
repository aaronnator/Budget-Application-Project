function openSlideMenu(){
    document.getElementById("menu").style.width = "250px";
    document.getElementById("content").style.marginLeft = "250px";
}

function closeSideMenu(){
    document.getElementById("menu").style.width = "0";
    document.getElementById("content").style.marginLeft = "0";
}

// function calculate(){
//     // principal = parseFloat(principal.value);
//     // interest = parseFloat(interest.value);
//     // time = parseFloat(timeVariable.value);
//     // timeIntervalSelector = document.getElementById("timeInterval");
//     var principal = parseFloat(document.getElementById("principal").value);
//     var interest = parseFloat(document.getElementById("interest").value);
//     var time = parseFloat(document.getElementById("timeVariable").value);
//     var timeSelecter = document.getElementById("timeInterval").value;
//     var timeInterval;

//     if(timeSelecter === "d"){
//         timeInterval = time / 365;
//     }
//     else if(timeSelecter === "w"){
//         timeInterval = time / 52;
//     }
//     else if(timeSelecter === "m"){
//         timeInterval = time / 12;
//     }
//     else if(timeSelecter === "q"){
//         timeInterval = time / 4;
//     }
//     else if(timeSelecter === "y"){
//         timeInterval = time;
//     }
//     var interestDecimal = interest / 100;

//     // if(timeIntervalSelector === "d"){
//     // timeInterval === time / 365;
//     // }
//     // else if(timeIntervalSelector === "w"){
//     // timeInterval === time / 52;
//     // }
//     // else if(timeIntervalSelector === "m"){
//     // timeInterval === time / 12;
//     // }
//     // else if(timeInterval === "q"){
//     // timeInterval === time / 4;
//     // }
//     // else if(timeIntervalSelector === "y"){
//     // timeInterval === time;
//     // }
//     // interestDecimal = interest / 100;

//     // calcDisplay.value = principal*(1+(interestDecimal * timeInterval));
//     var result = (principal*(1+(interestDecimal * timeInterval)));
//     document.getElementById("calcDisplay").value = result;
//     }

// function calculateTest()
// {
//     calcDisplay.value = 69;

// } 
