let countdown = document.querySelector("#countdown");
let eid = document.querySelector("#eid");
let tl = document.querySelector("#tl");

// get second value from page
let second = tl.value;

// result url with current eid
let redirectUrl =
  window.location.origin +
  window.location.pathname +
  "?q=result&eid=" +
  eid.value;

// redirecting to provided url when time over
function timeOver() {
  window.location.href = redirectUrl;
}

// update time every 1 second
let updateTime = setInterval(() => {
  second -= 1;
  let displayMinutes = Math.floor(second / 60);
  let displaySeconds = second - displayMinutes * 60;
  
  // display formatted time to the document
  countdown.innerText =
    "Time remaining: " + displayMinutes + ":" + displaySeconds;

  if (second <= 0) {
    clearInterval(updateTime);
    alert("Time Over!");
    timeOver();
  }
}, 1000);
