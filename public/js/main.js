var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
        '<b>' + greet + '</b>';
        alert (greet);

// sound script

var myGamePiece;
var myObstacles = [];
var mySound;
var myMusic;

function startGame() {
    myGamePiece = new component(30, 30, "red", 10, 120);
    mySound = new sound("bounce.mp3");
    myMusic = new sound("gametheme.mp3");
    myMusic.play();
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
    },
    stop : function() {
        clearInterval(this.interval);
    },    
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;        
    }    
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    }
}

function updateGameArea() {
    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    for (i = 0; i < myObstacles.length; i += 1) {
        if (myGamePiece.crashWith(myObstacles[i])) {
            mySound.play();
            myMusic.stop();
            myGameArea.stop();
            return;
        } 
    }
    myGameArea.clear();
    myGameArea.frameNo += 1;
    if (myGameArea.frameNo == 1 || everyinterval(150)) {
        x = myGameArea.canvas.width;
        minHeight = 20;
        maxHeight = 200;
        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
        minGap = 50;
        maxGap = 200;
        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
        myObstacles.push(new component(10, height, "green", x, 0));
        myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));
    }
    for (i = 0; i < myObstacles.length; i += 1) {
        myObstacles[i].x -= 1;
        myObstacles[i].update();
    }
    myGamePiece.newPos();
    myGamePiece.update();
}

function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }    
}

function everyinterval(n) {
    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}

function moveup() {
    myGamePiece.speedY = -1; 
}

function movedown() {
    myGamePiece.speedY = 1; 
}

function moveleft() {
    myGamePiece.speedX = -1; 
}

function moveright() {
    myGamePiece.speedX = 1; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}

// Night of 5th Jannuary ratings of 50% functional programming

function sliceArray(anim, beginSlice, endSlice) {
  // Only change code below this line

return anim.slice(beginSlice, endSlice);

  // Only change code above this line
}
var inputAnim = ["Cat", "Dog", "Tiger", "Zebra", "Ant", "beef", "rat", "cat", "fish"];
//var newEmdee = inputAnim.slice(4,8)
sliceArray(inputAnim, 1, 3);


// next

function nonMutatingConcat(original, attach, finland) {
  // Only change code below this line
return original.concat(attach).concat(finland)

  // Only change code above this line
}
var first = [1, 2, 3];
var second = [4, 5];
var sixed = ["gold", "Iron"];
nonMutatingConcat(first, second, sixed);
console.clear()
console.log(nonMutatingConcat(first));

// 63% gone with functional programming
function nonMutatingPush(original, newItem) {
  // Only change code below this line
  return original.concat(newItem);

  // Only change code above this line
}
var first = ["one", 2, 3];
var second = [4, "five"];
nonMutatingPush(first, second);
console.clear()
console.log(nonMutatingPush(first,second))

// another one

const users = [
  { name: 'John', age: 34 },
  { name: 'Amy', age: 20 },
  { name: 'camperCat', age: 10 }
];

const sumOfAges = users.reduce((sum, user) => sum + user.age, 0);
console.log(sumOfAges); // 64

// another Drink

const uzers = [
  { name: 'John', age: 34 },
  { name: 'Amy', age: 20 },
  { name: 'camperCat', age: 10 }
];

const uzersObj = uzers.reduce((obj, user) => {
  obj[user.name] = user.age;
  return obj;
}, {});
console.log(uzersObj); // { John: 34, Amy: 20, camperCat: 10 }


// 7th January, 2021
const squareList = arr => {
  // Only change code below this line
  return arr
   .filter(num => num > 0 && num % parseInt(num) === 0)
    .map(num => Math.pow(num, 2));
  // Only change code above this line
};

const squaredIntegers = squareList([-3, 4.8, 5, 3, -3.2]);
console.clear()
console.log(squaredIntegers);

// 8th January, 2021
var strHip = "Hello Monday Welcome and how Body na, Thanks!";
    //return  str.split(/\W/);
var anotherHip = strHip.split(" ", 4);
console.clear()
console.log(anotherHip)

// function splitify(str) {
//   // Only change code below this line
//   return  str.split(/\W/);
//   // Only change code above this line
// }
// splitify("Hello World,I-am code");
// console.clear()
// console.log(splitify)

// var d = ["bitch", "fable", "dance"];
// var t = ["Une", "Doe", "tre"];
// var feeble = d.concat(t);
// console.log(feeble);
// var stlle = d.join(" ");
// console.log(stlle)

// function sentensify(str) {
//   // Only change code below this line
// //return str.split(/\W/).join(" ");
// return str.split(/\W/);
//   // Only change code above this line
// }
// sentensify("May-the-force-be-with-you");
// console.log(sentensify)


// getinng to the end of this session

var globalTitle = "Winter Is Coming";
// Only change code below this line
function urlSlug(title) {
return title
.split(/\W/)
.filter(obj => {
    return obj !== "";
})
.join("-")
.toLowerCase();
}
var urlSlug = globalTitle
// Only change code above this line
console.log(urlSlug());