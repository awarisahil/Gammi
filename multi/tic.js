let btnRef = document.querySelectorAll(".button-option");
let restartBtn = document.getElementById("restart");
//Winning Pattern Array
let winningPattern = [
  [0, 1, 2],
  [0, 3, 6],
  [2, 5, 8],
  [6, 7, 8],
  [3, 4, 5],
  [1, 4, 7],
  [0, 4, 8],
  [2, 4, 6],
];
//Player 'X' plays first
let xTurn = true;
let count = 0;

//Disable All Buttons
const disableButtons = () => {
  btnRef.forEach((element) => (element.disabled = true));
};

//Enable all buttons (For New Game and Restart)
const enableButtons = () => {
  btnRef.forEach((element) => {
    element.innerText = "";
    element.disabled = false;
  });
  //disable popup
};

//This function is executed when a player wins
const winFunction = (letter) => {
  disableButtons();
  if (letter == "X") {
    Swal.fire({
      titleText:'The Winner is',
      text: 'X',
      showDenyButton: true,
      showCancelButton: true,
      showConfirmButton:true,
      confirmButtonText: 'Play Again',
      denyButtonText: `Home`,
     }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
           window.location = 'tic.php';
      } else if (result.isDenied) {
            window.location = '../Home.php';
      }
    })
  } else {
    Swal.fire({
      titleText:'The Winner is',
      text: 'O',
      showDenyButton: true,
      showCancelButton: true,
      showConfirmButton:true,
      confirmButtonText: 'Play Again',
      denyButtonText: `Home`,
     }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
           window.location = 'tic.php';
      } else if (result.isDenied) {
            window.location = '../Home.php';
      }
  })
};
}

//Function for draw
const drawFunction = () => {
  disableButtons();
  Swal.fire({
    titleText:'The Game is Draw',
    showDenyButton: true,
    showCancelButton: true,
    showConfirmButton:true,
    confirmButtonText: 'Play Again',
    denyButtonText: `Home`,
   }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
         window.location = 'tic.php';
    } else if (result.isDenied) {
          window.location = '../Home.php';
    }
  })
};

restartBtn.addEventListener("click", () => {
  count = 0;
  enableButtons();
});

//Win Logic
const winChecker = () => {
  //Loop through all win patterns
  for (let i of winningPattern) {
    let [element1, element2, element3] = [
      btnRef[i[0]].innerText,
      btnRef[i[1]].innerText,
      btnRef[i[2]].innerText,
    ];
    //Check if elements are filled
    //If 3 empty elements are same and would give win as would
    if (element1 != "" && (element2 != "") & (element3 != "")) {
      if (element1 == element2 && element2 == element3) {
        //If all 3 buttons have same values then pass the value to winFunction
        winFunction(element1);
      }
    }
  }
};

//Display X/O on click
btnRef.forEach((element) => {
  element.addEventListener("click", () => {
    if (xTurn) {
      xTurn = false;
      //Display X
      element.innerText = "X";
      element.disabled = true;
    } else {
      xTurn = true;
      //Display Y
      element.innerText = "O";
      element.disabled = true;
    }
    //Increment count on each click
    count += 1;
    if (count == 9) {
      drawFunction();
    }
    //Check for win on every click
    winChecker();
  });
});
//Enable Buttons and disable popup on page load
window.onload = enableButtons;
