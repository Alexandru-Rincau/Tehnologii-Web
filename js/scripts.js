const DATA = [
    {
        quest: '1. Din câte state e formtă uniunea Europeană?',
        answ : [
            {
                id: '1',
                value: '27',
                correct: true,
            },
            {
                id: '2',
                value: '25',
                correct: false,
            },
            {
                id: '3',
                value: '26',
                correct: false,
            },
        ]
    },
    {
        quest: '2. Ce monedă utilizează UE ?',
        answ : [
            {
                id: '4',
                value: 'Tugrica',
                correct: false,
            },
            {
                id: '5',
                value: 'Euro',
                correct: true,
            },
            {
                id: '6',
                value: 'Lira sterlină',
                correct: false,
            },
        ]
    },
    {
        quest: '3. Membrii inițiali ai Comunității Europene au fost:',
        answ : [
            {
                id: '7',
                value: 'Belgia, Franța, Italia, Luxemburg, Olanda și Germania de Est',
                correct: false,
            },
            {
                id: '8',
                value: 'Belgia, Franța, Italia, Luxemburg, Olanda și Germania de Vest',
                correct: true,
            },
            {
                id: '9',
                value: 'Belgia, Franța, Italia, SUA, Olanda și Germania de Vest',
                correct: false,
            },
        ]
    },
    {
        quest: '4. Cine a părăsit UE în anul 2020 ?',
        answ : [
            {
                id: '10',
                value: 'Franța',
                correct: false,
            },
            {
                id: '11',
                value: 'Germania de Est',
                correct: false,
            },
            {
                id: '12',
                value: 'Marea-Britanie',
                correct: true,
            },
        ]
    },
    {
        quest: '5. În ce an UE a primit Premiul Nobel pentru Pace ?',
        answ : [
            {
                id: '13',
                value: '2010',
                correct: false,
            },
            {
                id: '14',
                value: '2009',
                correct: false,
            },
            {
                id: '15',
                value: '2012',
                correct: true,
            },
        ]
    },
];

let localRes = {};

const quiz = document.getElementById('quiz');
const quest = document.getElementById('quest');
const ind = document.getElementById('ind');
const res = document.getElementById('res');
const btnNext = document.getElementById('btn-next');
const btnRestart = document.getElementById('btn-restart');

const renderQuest = (index) => {
    renderInd(index + 1);

    quest.dataset.currentStep = index;

    const renderAnsw = () => DATA[index].answ
        .map((answ) => `
            <li>
                <label>
                    <input class="answ-input" type="radio" name= ${index} value=${answ.id}>
                      ${answ.value}
                </label>
            </li>   `
        )
        .join('');

    quest.innerHTML = `
    <div class="quiz-quest-item-quest">${DATA[index].quest}</div>
    <ul class="quiz-quest-item-answ">${renderAnsw()}</ul>
</div>
`;

};
const renderRes = () => {
    let content = '';

    const getClassname = (answ, questIndex) => {
        let classname = '';

        if (!answ.correct && answ.id === localRes[questIndex]) {
            classname = 'answ--invalid';
        }else if (answ.correct && answ.id === localRes[questIndex]) {
            classname = 'answ--valid';
        }
        return classname;
    };

    const getAnsw = (questIndex) => DATA[questIndex].answ
        .map((answ) =>`<li class=${getClassname(answ, questIndex)}>${answ.value}</li>`)
            .join('');

    DATA.forEach((quest,index) =>{
        content += `
         <div class="quiz-res-item">
            <div class="quiz-res-item-quest">${quest.quest}</div>
            <ul class="quiz-res-item-answ">${getAnsw(index)}<ul>     
        </div>
        `;
    });

    res.innerHTML = content;
};
const renderInd = (currentStep) => {
    ind.innerHTML = `${currentStep}/${DATA.length}`;
};

quiz.addEventListener('change', (event) => {
    if(event.target.classList.contains('answ-input')){
        localRes[event.target.name] = event.target.value;
        btnNext.disabled = false;
    }
});

quiz.addEventListener('click', (event) => {
    if(event.target.classList.contains('btn-next')){
        const nextQuestIndex = Number(quest.dataset.currentStep) +1

        if(DATA.length === nextQuestIndex){
            quest.classList.add('quest--hidden');
            ind.classList.add('ind--hidden');
            res.classList.add('res--visible');
            btnNext.classList.add('btn-next--hidden');
            btnRestart.classList.add('btn-restart--visible');
             renderRes()
        }else{
            renderQuest(nextQuestIndex);
        }

        btnNext.disabled = true;
    }
    if(event.target.classList.contains('btn-restart')){
        localRes = {};
        res.innerHTML = '';

        quest.classList.remove('quest--hidden');
        ind.classList.remove('ind--hidden');
        res.classList.remove('res--visible');
        btnNext.classList.remove('btn-next--hidden');
        btnRestart.classList.remove('btn-restart--visible');
        renderQuest(0);
    }
});

renderQuest(0);

function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xmlhttp.open("GET", "../catalog.xml", true);
    xmlhttp.send();
}
function myFunction(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table="<tr><th>Denumirea</th><th>Conducatorul</th><th>Locul</th><th>Anul</th</tr>";
    var x = xmlDoc.getElementsByTagName("CD");
    for (i = 0; i <x.length; i++) {
        table += "<tr><td>" +
            x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
            "</td><td>"+
            x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
            "</td><td>"+
            x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
            "</td></tr>";
    }
    document.getElementById("demo").innerHTML = table;
}