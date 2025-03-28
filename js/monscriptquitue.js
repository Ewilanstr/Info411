
fetch("crud/user.php").then(response => response.json()).then(data => {
    console.log(data);
    let divv = document.querySelector(".data");
    for (let i = 0; i < data.length; i++) {
        let p = document.createElement("p");
        p.innerHTML = data[i].mail;
        divv.appendChild(p);
    }
});