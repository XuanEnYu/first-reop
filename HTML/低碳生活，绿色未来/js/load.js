// 加载动画
const loader = document.querySelector('.loader');
setTimeout(() => {
    loader.style.transform = 'translateY(-100%)';
}, 500)
setTimeout(() => {
    loader.style.display = 'none';
}, 900)
setTimeout(() => {
    loader.style.transform = 'translateY(0)';
}, 900)
// 点击加载动画
function load(){
    loader.style.display = 'flex';
    setTimeout(() => {
        loader.style.transform = 'translateY(-100%)';
    }, 500);
    setTimeout(() => {
        loader.style.display = 'none';
    }, 900)
    setTimeout(() => {
        loader.style.transform = 'translateY(0)';
    }, 900);
}
