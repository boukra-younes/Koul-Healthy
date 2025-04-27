// التعامل مع إظهار/إخفاء كلمة المرور
const eyeIcon = document.getElementById("login-eye");
const passwordInput = document.getElementById("login-pass");

if (eyeIcon && passwordInput) {
    eyeIcon.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("ri-eye-off-line");
            eyeIcon.classList.add("ri-eye-line");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("ri-eye-line");
            eyeIcon.classList.add("ri-eye-off-line");
        }
    });
}

// التعامل مع التمرير (scroll) وتغيير خصائص الشريط العلوي
let prevScrollpos = window.pageYOffset;
window.addEventListener('scroll', function() {
    const scrollPoint = 150;
    const body = document.body;
    const navigator = document.getElementById("navigator");
    const navbar = document.getElementById("navbar");
    const currentScrollPos = window.pageYOffset;

    if (navbar && navigator) {
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
    }
});

// دالة للتمرير إلى أعلى الصفحة
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

const scrollToTopBtn = document.getElementById("scrollToTopBtn");
if (scrollToTopBtn) {
    scrollToTopBtn.addEventListener("click", scrollToTop);
}
