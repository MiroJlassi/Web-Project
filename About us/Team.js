const teamData = [
    { name: "Marwen Jlassi", imgSrc: "Media/Miro.png", role: "Developpeur Web" },
    { name: "Wiem Koussani", imgSrc: "Media/wiem.jpeg.png", role: "Developpeur Web" },
    { name: "Yasmine Tounsi", imgSrc: "Media/yasmine.jpeg.png", role: "Developpeur Web" },
];

const teamContainer = document.querySelector('.team-container');

teamData.forEach(member => {
    const memberDiv = document.createElement('div');
    memberDiv.classList.add('team-member');

    const img = document.createElement('img');
    img.src = member.imgSrc;
    img.alt = member.name;

    const name = document.createElement('h2');
    name.textContent = member.name;

    const role = document.createElement('p');
    role.textContent = member.role;

    memberDiv.appendChild(img);
    memberDiv.appendChild(name);
    memberDiv.appendChild(role);

    teamContainer.appendChild(memberDiv);
});