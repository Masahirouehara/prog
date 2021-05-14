const results = [
    'グー',
    'チョキ',
    'パー',
]

function draw(){
const key =Math.floor(Math.random() * results.length)
console.log(key)
const aite = document.getElementById("aite")
aite.textContent = results[key]
}

function draw2(){
    const key =Math.floor(Math.random() *  results.length)
    console.log(key)
    const aite = document.getElementById("aite")
    aite.textContent = results[key]
    }

function draw3(){
    const key =Math.floor(Math.random() *  results.length)
    console.log(key)
    const aite = document.getElementById("aite")
    aite.textContent = results[key]
        }

