// 打开模态框
function openModal() {
    document.getElementById("Modal").style.opacity = "0";
    document.getElementById("Modal").style.display = "block";
    setTimeout(function () {
        document.getElementById("Modal-box").style.left = "0";
    }, 1);
    setTimeout(function () {
        document.getElementById("Modal").style.opacity = "1";
    }, 1);
    setTimeout(function () {
        document.getElementById("Modal").style.backdropFilter = "blur(5px)";
    }, 1);
}
// 关闭模态框
function closeModal() {
    document.getElementById("Modal-box").style.left = "-40%";
    setTimeout(function () {
        document.getElementById("Modal").style.opacity = "0";
    }, 30);
    setTimeout(function () {
        document.getElementById("Modal").style.display = "none";
    }, 200);
    setTimeout(function () {
        document.getElementById("Modal").style.backdropFilter = "blur(0)";
    }, 200);
}
// 点击模态框背景关闭模态框
function clickBackground() {
    if (event.target.id == "Modal") {
        closeModal();
    }
}
// 登录模态框打开按钮点击事件
function openLoginModal() {
    document.getElementById("loginModal").style.display = "flex";
    setTimeout(function () {
        document.getElementById("loginModal").style.opacity = "1";
    }, 30);
}
// 登录模态框关闭按钮点击事件
function closeLoginModal() {
    document.getElementById("loginModal").style.opacity = "0";
    setTimeout(function () {
        document.getElementById("loginModal").style.display = "none";
    }, 200);
}
// 双击登录模态框背景关闭模态框
// document.getElementById("loginModal").addEventListener("dblclick", function () {
//     closeLoginModal();
// });
// 登录模态框转换注册模态框按钮点击事件
function openRegModal() {
    document.getElementById("closeloginModal").style.opacity = "0";
    setTimeout(function () {
        document.getElementById("closeloginModal").style.display = "none";
    }, 200);
    setTimeout(function () {
        document.getElementById("regModal").style.display = "block";
    }, 400);
    setTimeout(function () {
        document.getElementById("regModal").style.opacity = "1";
    }, 440);
}
// 注册模态框转换登录模态框按钮点击事件
function openLoginModal2() {
    document.getElementById("regModal").style.opacity = "0";
    setTimeout(function () {
        document.getElementById("regModal").style.display = "none";
    }, 200);
    setTimeout(function () {
        document.getElementById("closeloginModal").style.display = "block";
    }, 400);
    setTimeout(function () {
        document.getElementById("closeloginModal").style.opacity = "1";
    }, 440);
}
// 登录跳转模拟
let input_txt = document.getElementById("username");
let input_pass = document.getElementById("password");
let input_sub = document.getElementById("login_btn");

input_sub.onclick = function () {
    let username = input_txt.value
    let password = input_pass.value
    if (username.length >= 6 && password.length >= 6) {
        showPopups()
        localStorage.setItem("username", username)
        localStorage.setItem("password", password)
        closeLoginModal()
        setTimeout(function () {
            document.location.href = "index-login.html"
        }, 3000);
        
    } else {
        showPopups1()
    }
}
input_txt.value = localStorage.getItem("username");
input_pass.value = localStorage.getItem("password");
// 关于我们动画
// 获取动画元素和触发元素
var animatedElement = document.getElementById('about-animation');
var trigger = document.getElementById('trigger');

// 设置触发动画的阈值，即滚动到触发元素顶部距离视口顶部的距离
var triggerOffset = trigger.getBoundingClientRect().top;

window.addEventListener('scroll', function () {
    // 当滚动到触发元素时，播放动画
    if (window.pageYOffset >= triggerOffset) {
        animatedElement.style.animation = "about-in 1s ease-in-out forwards";
    }
});
// 减排方案动画
// 获取动画元素和触发元素
var animatedElement = document.getElementById('about-animation');
var trigger = document.getElementById('trigger');

// 设置触发动画的阈值，即滚动到触发元素顶部距离视口顶部的距离
var triggerOffset = trigger.getBoundingClientRect().top;

window.addEventListener('scroll', function () {
    // 当滚动到触发元素时，播放动画
    if (window.pageYOffset >= triggerOffset) {
        animatedElement.style.animation = "about-in 1s ease-in-out forwards";
    }
});
// 碳足迹伸缩栏
function toggleMenu(e) {
    var target = e.target;
    while (target.tagName !== "LI" && target !== document.querySelector("ul")) {
        target = target.parentNode;
    }
    var faq = target.querySelector(".faq");
    if (faq.style.display === "none") {
        faq.style.display = "block";
        faq.style.opacity = 1;
        faq.style.height = faq.scrollHeight + "px";
    } else {
        faq.style.opacity = 0;
        faq.style.height = 0;
        setTimeout(function () {
            faq.style.display = "none";
        }, 300);
    }
}
document.querySelector("#faq").addEventListener("click", function (e) {
    toggleMenu(e);
});