function showPopups() {
    let html = document.getElementById('popupsContent').innerHTML; // 获取弹窗内容
    let popupsContent = '<p>'+ html +'</p>'; // 定义变量来存储innerHTML的值
    let popups = document.createElement('div');
    popups.className = 'pop-ups';
    popups.innerHTML = popupsContent; // 使用变量作为innerHTML的值
    document.body.appendChild(popups);
    // 定时器，5秒后移除弹窗
    setTimeout(function () {
        document.body.removeChild(popups);
    }, 5000);
    // 弹窗叠加外边距
    let popupsArr = document.querySelectorAll('.pop-ups');
    for (let i = 0; i < popupsArr.length; i++) {
        popupsArr[i].style.marginBottom = (i + 1) * 50 -35 + 'px';
    }
}
function showPopups1() {
    let html = document.getElementById('popupsContent1').innerHTML; // 获取弹窗内容
    let popupsContent1 = '<p>'+ html +'</p>'; // 定义变量来存储innerHTML的值
    let popups = document.createElement('div');
    popups.className = 'pop-ups';
    popups.innerHTML = popupsContent1; // 使用变量作为innerHTML的值
    document.body.appendChild(popups);
    // 定时器，5秒后移除弹窗
    setTimeout(function () {
        document.body.removeChild(popups);
    }, 5000);
    // 弹窗叠加外边距
    let popupsArr = document.querySelectorAll('.pop-ups');
    for (let i = 0; i < popupsArr.length; i++) {
        popupsArr[i].style.marginBottom = (i + 1) * 50 -35 + 'px';
    }
}
// 碳足迹弹窗
function showPopups2() {
    let html = document.getElementById('popupsContent2').innerHTML; // 获取弹窗内容
    let popupsContent2 = '<p>'+ html +'</p>'; // 定义变量来存储innerHTML的值
    let popups = document.createElement('div');
    popups.className = 'pop-ups';
    popups.innerHTML = popupsContent2; // 使用变量作为innerHTML的值
    document.body.appendChild(popups);
    // 定时器，5秒后移除弹窗
    setTimeout(function () {
        document.body.removeChild(popups);
    }, 5000);
    // 弹窗叠加外边距
    let popupsArr = document.querySelectorAll('.pop-ups');
    for (let i = 0; i < popupsArr.length; i++) {
        popupsArr[i].style.marginBottom = (i + 1) * 50 -35 + 'px';
    }
}