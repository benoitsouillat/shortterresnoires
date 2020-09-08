let content = document.getElementById("article-content");
let sectionA = document.createElement("section");
    sectionA.id = "article-list";

content.appendChild(sectionA);

articles.forEach(elm => {

    let asideArticle = document.createElement("aside");
        asideArticle.id = elm.artId;
        asideArticle.classList.add("article-prev")

    let headArticle = document.createElement("div");
        headArticle.classList.add("article-head");
    let titleArticle = document.createElement("h2");
        titleArticle.textContent = elm.artTitle;
        titleArticle.classList.add("article-title");

    let contentArticle = document.createElement("div");
        contentArticle.classList.add("article-content");
    let descArticle = document.createElement("p");
        descArticle.innerText = elm.artDescription;
        descArticle.classList.add("article-description");
    let dateArticle = document.createElement("p");
        dateArticle.textContent = "le : " + elm.artDate;
        dateArticle.classList.add("article-date");

    let footArticle = document.createElement("div");
        footArticle.classList.add("article-foot");
    let authorArticle = document.createElement("strong");
        authorArticle.textContent = elm.artAuthor;
        authorArticle.classList.add("article-author");
    let imageArticle = document.createElement("img");
        imageArticle.classList.add("article-image");
        imageArticle.src = path + elm.artDog.dogName.toLowerCase() + "2"+ jpg;


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

