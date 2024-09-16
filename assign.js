
// Go button 
function bgChange(event) {
    const clickedButton = event.target;

    if (clickedButton.id === "btn1") {
        clickedButton.style.backgroundColor = "#FEBF58";
        clickedButton.style.borderRadius = "48px"; // Set border radius for btn1 (can be overridden from CSS)
        clickedButton.style.width = "71.5px";   // Set width for btn1 (can be overridden from CSS)
        clickedButton.style.height = "48px";
        clickedButton.style.border = "none";


    } else if (clickedButton.id === "btn2") {
        clickedButton.style.backgroundColor = "#FEBF58";
        clickedButton.style.borderRadius = "48px"; // Set border radius for btn1 (can be overridden from CSS)
        clickedButton.style.width = "71.5px";   // Set width for btn1 (can be overridden from CSS)
        clickedButton.style.height = "48px";
        clickedButton.style.border = "none";


    } else if (clickedButton.id === "btn3") {
        clickedButton.style.backgroundColor = "#FEBF58";
        clickedButton.style.borderRadius = "48px"; // Set border radius for btn1 (can be overridden from CSS)
        clickedButton.style.width = "71.5px";   // Set width for btn1 (can be overridden from CSS)
        clickedButton.style.height = "48px";
        clickedButton.style.border = "none";

    }
}

const buttons = document.querySelectorAll("button");
buttons.forEach(button => button.addEventListener("click", bgChange));


// Play button and Pause button
// First Play Button
function playBtnHandler(event) {
    const clicked = event.target;

    if (clicked.id === "icon-play-btn1") {

        clicked.style.display = "none";
        // hiding the full span btn 1
        const elem1 = document.getElementById("btn-out-1");
        elem1.style.display = "none";

        //showing playbtn2
        const elem2 = document.getElementById("btn-out-2");
        elem2.style.display = "flex";
        const playbtn2 = document.getElementById("icon-play-btn2");
        playbtn2.style.display = "flex";

        //showing span btn3
        const elem3 = document.getElementById("btn-out-3");
        elem3.style.display = "flex";
        const playbtn3 = document.getElementById("icon-play-btn3");
        playbtn3.style.display = "flex";

    }
}

const playButton1 = document.querySelector("#icon-play-btn1");
playButton1.addEventListener("click", playBtnHandler);

// Second Play Button
function secondPlayBtnHandler(event) {
    const clicked = event.target;

    if (clicked.id === "icon-play-btn2") {

        clicked.style.display = "none";

        // hiding the full span btn 2
        const elem2 = document.getElementById("btn-out-2");
        elem2.style.display = "none";

        //showing span btn1
        const elem1 = document.getElementById("btn-out-1");
        elem1.style.display = "flex";
        const playbtn1 = document.getElementById("icon-play-btn1");
        playbtn1.style.display = "flex"

        //showing span btn3
        const elem3 = document.getElementById("btn-out-3");
        elem3.style.display = "flex";
        const playbtn3 = document.getElementById("icon-play-btn3");
        playbtn3.style.display = "flex"

    }
}

const playButton2 = document.querySelector("#icon-play-btn2");
playButton2.addEventListener("click", secondPlayBtnHandler);

//Third Play Button

function thirdPlayBtnHandler(event) {
    const clicked = event.target;

    if (clicked.id === "icon-play-btn3") {

        clicked.style.display = "none";

        // hiding the full span btn 3
        const elem3 = document.getElementById("btn-out-3");
        elem3.style.display = "none";

        //showing span btn1
        const elem1 = document.getElementById("btn-out-1");
        elem1.style.display = "flex";
        const playbtn1 = document.getElementById("icon-play-btn1");
        playbtn1.style.display = "flex"

        //showing span btn2
        const elem2 = document.getElementById("btn-out-2");
        elem2.style.display = "flex";
        const playbtn2 = document.getElementById("icon-play-btn2");
        playbtn2.style.display = "flex";

    }
}
const playButton3 = document.querySelector("#icon-play-btn3");
playButton3.addEventListener("click", thirdPlayBtnHandler);


//On Hover Function Play Video 1
function onHover() {
    const pauseBtn1 = document.querySelector("#icon-pause-btn1");
    pauseBtn1.style.display = "flex";

    const playBtn1 = document.getElementById('icon-play-btn1');
    playBtn1.style.display = "none";


}

//onMouseOut
function onHoverOut() {
    const pauseBtn = document.getElementById('icon-pause-btn1');
    pauseBtn.style.display = "none";

    const playBtn1 = document.getElementById('icon-play-btn1');
    playBtn1.style.display = "flex";
}

//On Hover Function Play Video 2
function onHoverVideo2() {
    const pauseBtn2 = document.querySelector("#icon-pause-btn2");
    pauseBtn2.style.display = "flex";
    const playBtn2 = document.getElementById('icon-play-btn2');
    playBtn2.style.display = "none";

}

//onMouseOut
function onHoverOutVideo2() {
    const pauseBtn2 = document.getElementById('icon-pause-btn2');
    pauseBtn2.style.display = "none";

    const playBtn1 = document.getElementById('icon-play-btn2');
    playBtn1.style.display = "flex";
}

//On Hover Function Play Video 3
function onHoverVideo3() {
    const pauseBtn3 = document.querySelector("#icon-pause-btn3");
    pauseBtn3.style.display = "flex";
    const playBtn3 = document.getElementById('icon-play-btn3');
    playBtn3.style.display = "none";

}

//onMouseOut
function onHoverOutVideo3() {
    const pauseBtn3 = document.getElementById('icon-pause-btn3');
    pauseBtn3.style.display = "none";

    const playBtn3 = document.getElementById('icon-play-btn3');
    playBtn3.style.display = "flex";
}