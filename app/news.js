let content = document.getElementById("article-content");
let sectionA = document.createElement("section");
    sectionA.id = "article-list";

content.appendChild(sectionA);

articles.forEach(elm => {

    let asideArticle = document.createElement("aside");
        asideArticle.id = elm.artId;
        asideArticle.classList.add("article")

    let headArticle = document.createElement("div");
        headArticle.classList.add("article__head");
    let titleArticle = document.createElement("h2");
        titleArticle.textContent = elm.artTitle;
        titleArticle.classList.add("article__title");

    let contentArticle = document.createElement("div");
        contentArticle.classList.add("article__content");
    let descArticle = document.createElement("p");
        descArticle.innerText = elm.artDescription;
        descArticle.classList.add("article__description");
    let dateArticle = document.createElement("p");
        dateArticle.textContent = "le : " + elm.artDate;
        dateArticle.classList.add("article__date");

    let footArticle = document.createElement("div");
        footArticle.classList.add("article__foot");
    let authorArticle = document.createElement("strong");
        authorArticle.textContent = elm.artAuthor;
        authorArticle.classList.add("article__author");
    let imageArticle = document.createElement("img");
        imageArticle.classList.add("article__image");
        imageArticle.src = imgPath + elm.artDog.dogName.toLowerCase() + "2"+ jpg;


    sectionA.insertAdjacentElement("afterbegin", asideArticle);

    asideArticle.appendChild(headArticle);
    asideArticle.appendChild(contentArticle);
    asideArticle.appendChild(footArticle);

    headArticle.appendChild(titleArticle);
    contentArticle.appendChild(descArticle);
    contentArticle.appendChild(imageArticle);
    footArticle.appendChild(dateArticle);
    footArticle.appendChild(authorArticle);

});

