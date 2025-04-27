const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

var prevScrollpos = window.pageYOffset; 

window.onscroll = function() {
    var scrollPoint = 150;  
    var body = document.body;
    var navigator = document.getElementById("navigator");
    var navbar = document.getElementById("navbar");
    var currentScrollPos = window.pageYOffset;

    if (document.documentElement.scrollTop > scrollPoint || body.scrollTop > scrollPoint) {
        navbar.style.backgroundColor = "rgba(255, 255, 255, 0.792)";
        navigator.style.position = "fixed";
        navbar.style.boxShadow = "inset 0px 0px 20px 10px rgba(0, 0, 0, 0.2), 2px 2px 4px 2px rgba(0, 0, 0, 0.3)";
        navigator.style.height = "50px";
        document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
        if (prevScrollpos > currentScrollPos) {
            navigator.style.position = "fixed";
        } else {
            navigator.style.position = "absolute";
        }
        document.getElementById("scrollToTopBtn").style.display = "none";
        navbar.style.backgroundColor = "white";
        navbar.style.boxShadow = "none";
        navigator.style.height = "0";
    }
    prevScrollpos = currentScrollPos;

    let sections = document.querySelectorAll('section');
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;

        if (top >= offset && top <= offset + height + 100) {
            sec.classList.add('show-animate');
        } else {
            sec.classList.remove('show-animate');
        }
    });
};

function scrollToTop() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
}

document.addEventListener("DOMContentLoaded", function() {
    var loadingImage = document.querySelector('.loading-image');
    var mainContent = document.getElementById('element-to-hide');

    mainContent.style.display = 'none';

    setTimeout(function() {
        loadingImage.style.display = 'none';
        mainContent.style.display = 'block';
    }, 2104); 
});

VanillaTilt.init(document.querySelectorAll(".card_2"), {
    max: 25,
    speed: 400,
    glare: true,
    "max-glare": 0.5, 
});

document.querySelectorAll(".card_2").forEach(function(card) {
    card.addEventListener("mousemove", function(event) {
        event.stopPropagation();
    });
});


document.getElementById("reviews").addEventListener('click', function() {
    document.querySelector('.countainer_2').style.display = "none";
    document.getElementById('description').style.backgroundColor ="black";
    document.getElementById('reviews').style.backgroundColor ="#609A33";
    document.querySelector('.container_3').style.display = "flex";


});
document.getElementById("description").addEventListener('click', function() {
    document.querySelector('.countainer_2').style.display = "block";
    document.querySelector('.container_3').style.display = "none";
    document.getElementById('reviews').style.backgroundColor ="black";
    document.getElementById('description').style.backgroundColor ="#609A33";
    document.getElementById("commentBox").style.display = "none";

});


function toggleCommentBox() {
    var commentBox = document.getElementById("commentBox");
    if (commentBox.style.display === "none") {
        commentBox.style.display = "block";
    } else {
        commentBox.style.display = "none";
    }
}


var selectedRating = 0;

var starr = document.querySelectorAll('.star a');
starr.forEach((item, index1) => {
    item.addEventListener('click', () => {
        selectedRating = index1 + 1; 
        starr.forEach((star, index2) => {
            if (index2 <= index1) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    });
});
function addComment() {
    var commentText = document.getElementById("commentText").value;
    if (commentText.trim() === "") {
        alert("Please enter the comment first!");
        return;
    }

    var selectedRating = 0;
    var starr = document.querySelectorAll('.star a');
    starr.forEach((item, index1) => {
        if (item.classList.contains('active')) {
            selectedRating = index1 + 1;
        }
    });

    starr.forEach((star, index2) => {
        star.classList.remove('active');
    });

    // إنشاء عنصر التعليق وتكوينه
    var commentList = document.getElementById("commentList");
    var commentItem = document.createElement("div");
    commentItem.classList.add("card_2");
    
    var content = document.createElement("div");
    content.classList.add("content");
    
    var stars = document.createElement("div");
    stars.classList.add("stars");
    for (var i = 1; i <= 5; i++) {
        var star = document.createElement('i');
        if (i <= selectedRating) {
            star.className = 'fas fa-star';
        } else {
            star.className = 'fa-regular fa-star';
        }
        stars.appendChild(star);
    }
    
    var h3 = document.createElement("h3");
    h3.textContent = "@user";
    h3.style.display = "flex";
    var p = document.createElement("p");
    p.textContent = commentText;
    
    var addReviewBtn = document.createElement("button");
    addReviewBtn.textContent = "Add Review"; 
    addReviewBtn.addEventListener("click", function() {
        toggleCommentBox();
    });

    content.appendChild(stars);
    content.appendChild(h3);
    content.appendChild(p);
    content.appendChild(addReviewBtn);
    
    commentItem.appendChild(content);

    commentList.appendChild(commentItem);    
    commentList.style.display = "flex";
    commentList.style.flexWrap = "wrap";
    commentList.style.justifyContent = "center";

    
    var allComments = document.querySelectorAll(".container_3 .card_2");
    allComments.forEach(function(comment, index) {
        comment.style.order = allComments.length - index; 
    });
    VanillaTilt.init(commentItem, {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 0.5,
            });
        
    document.getElementById("commentText").value = ""; 
}




const cardsContainer = document.querySelector(".cards");
const cardsContainerInner = document.querySelector(".cards__inner");
const cards = Array.from(document.querySelectorAll(".cardp"));
const overlay = document.querySelector(".overlay");

const applyOverlayMask = (e) => {
  const overlayEl = e.currentTarget;
  const x = e.pageX - cardsContainer.offsetLeft;
  const y = e.pageY - cardsContainer.offsetTop;

  overlayEl.style = `--opacity: 1; --x: ${x}px; --y:${y/2}px;`;
};


const createOverlayCta = (overlayCard, ctaEl) => {
  const overlayCta = document.createElement("div");
  overlayCta.classList.add("cta");
  overlayCta.textContent = ctaEl.textContent;
  overlayCta.setAttribute("aria-hidden", true);
  overlayCard.append(overlayCta);
};

const observer = new ResizeObserver((entries) => {
  entries.forEach((entry) => {
    const cardIndex = cards.indexOf(entry.target);
    let width = entry.borderBoxSize[0].inlineSize;
    let height = entry.borderBoxSize[0].blockSize;

    if (cardIndex >= 0) {
      overlay.children[cardIndex].style.width = `${width}px`;
      overlay.children[cardIndex].style.height = `${height}px`;
    }
  });
});

const initOverlayCard = (cardEl) => {
  const overlayCard = document.createElement("div");
  overlayCard.classList.add("cardp");
  createOverlayCta(overlayCard, cardEl.lastElementChild);
  overlay.append(overlayCard);
  observer.observe(cardEl);
};

cards.forEach(initOverlayCard);
document.body.addEventListener("pointermove", applyOverlayMask);