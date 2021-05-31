const floppalist = [ //najlepsze 15 linijek kodu jakie napisalem w zyciu
    "https://cdn.discordapp.com/attachments/828349561063604254/848912638536187924/floppvana.png",
    "https://cdn.discordapp.com/attachments/828349561063604254/848913353417687090/melon.png",
    "https://cdn.discordapp.com/attachments/828349561063604254/848913455734063114/selfie.png",
    "https://cdn.discordapp.com/attachments/828349561063604254/849008037641715762/14.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008040161968148/13.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008041852797008/12.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008043622793286/11.jpg?width=561&height=676",
    "https://media.discordapp.net/attachments/828349561063604254/849008044423249960/10.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008045857832990/9.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008047556919316/8.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008048496443433/1.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008049887772682/5.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008054338453574/3.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008081634328626/2.jpg",
    "https://media.discordapp.net/attachments/828349561063604254/849008102450790430/4.gif"
]
function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}
shuffleArray(floppalist)
const floppa1 = document.getElementById("floppa-1")
const floppa2 = document.getElementById("floppa-2")
const floppa3 = document.getElementById("floppa-3")
floppa1.src = floppalist[0]
floppa2.src = floppalist[1]
floppa3.src = floppalist[2]