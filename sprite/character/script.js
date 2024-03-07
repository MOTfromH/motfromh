playerState = 'run';
const dropdown = document.getElementById('animations');
dropdown.addEventListener('change', function(e){
    playerState = e.target.value;
})

const canvas = document.getElementById('canvas1');
const ctx = canvas.getContext('2d');

const CANVAS_WIDHT = canvas.width = 600;
const CANVAS_HEiGHT = canvas.height = 600;

const playerImage = new Image();
playerImage.src = 'img/shadow_dog.png';
const spriteWidth = 575;
const spriteHeight = 523;

//let frameX = 0;
//let frameY = 0;
let gameFrame = 0;
const staggerFrames = 18;// hier Geschwindigkeit einstellen
const spriteAnimations = [];
const animationState = [
    {
        name: 'idle',
        frames: 7,
    },
    {
        name: 'jump',
        frames: 7,
    },
    {
        name: 'fall',
        frames: 7,
    },
    {
        name: 'run',
        frames: 7,
    },
    {
        name: 'dizzy',
        frames: 11,
    },
    {
        name: 'sit',
        frames: 5,
    },
    {
        name: 'roll',
        frames: 7,
    },
    {
        name: 'bite',
        frames: 7,
    },
    {
        name: 'ko',
        frames: 11,
    },
    {
        name: 'getHit',
        frames: 4,
    },

];
animationState.forEach((state, index) => {
    let frames = {
        loc: [],
    }
    for (let j = 0; j < state.frames; j++){
        let positionX =  j * spriteHeight;
        let positionY = index * spriteHeight;
        frames.loc.push({x: positionX, y: positionY});
    }
    spriteAnimations[state.name] = frames;

});
console.log(spriteAnimations);

function animate(){
    ctx.clearRect(0, 0, CANVAS_WIDHT, CANVAS_HEiGHT);

    let position = Math.floor(gameFrame/ staggerFrames) % spriteAnimations[playerState].loc.length; //
    let frameX = spriteWidth * position;
    let frameY = spriteAnimations[playerState].loc[position].y;
    //ctx.fillRect(50, 50, 100, 100);
    //ctx.drawImage(image, sx (source x), sy, sw, sh, dx, dy, dw, dh);
    ctx.drawImage(playerImage, frameX , frameY , spriteWidth, spriteHeight, 0, 0, spriteWidth, spriteHeight)
   
    /*if (gameFrame % staggerFrames == 0){
    if (frameX < 6) frameX++;
    else frameX = 0; 
};*/


    gameFrame++;
    requestAnimationFrame(animate);

};
animate();
