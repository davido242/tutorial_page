var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    // document.getElementById('lblGreetings').innerHTML =
    //     '<b>' + greet + '</b>';
    //     alert //(greet);

// From Java in Anambra
// function myTimer() {
//   var d = new Date();
//   document.getElementById("demon").innerHTML = d.toLocaleTimeString();
// }

// Funtional Programmin Language
const squareList = arr => {
  // Only change code below this line
  return arr.reduce((sqrIntegers, num) => {
    return Number.isInteger(num) && num > 0
      ? sqrIntegers.concat(num * num)
      : sqrIntegers;
  }, []);
  // Only change code above this line
};

const squaredIntegers = squareList([-3, 4.8, 5, 3, -3.2]);
console.log(squaredIntegers);
