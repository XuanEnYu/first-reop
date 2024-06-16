document.addEventListener('DOMContentLoaded', function () {
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const itemHeight = carouselItems[0].offsetHeight;
    // 计算总高度
    const totalHeight = carouselItems.length + itemHeight * (carouselItems.length - 1);
    // 初始化位置
    carouselInner.style.transform = `translateY(${-currentIndex * itemHeight + itemHeight}px)`;
    // 上按钮事件
    document.querySelector('.carousel-control-prev').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarouselPosition();
        }
    });
    // 下按钮事件
    document.querySelector('.carousel-control-next').addEventListener('click', () => {
        if (currentIndex < carouselItems.length - 1) {
            currentIndex++;
            updateCarouselPosition();
        }
    });

    function updateCarouselPosition() {
        carouselInner.style.transform = `translateY(${-currentIndex * itemHeight + itemHeight}px)`;
    }
    // // 轮播效果
    // setInterval(() => {
    //     if (currentIndex < carouselItems.length - 1) {
    //         currentIndex++;
    //         updateCarouselPosition();
    //     } else {
    //         currentIndex = 0;
    //         updateCarouselPosition();
    //     }
    // }, 3000);
});