// const slideItem = document.querySelectorAll('.slide-item');
//     for (let index = 0; index < slideItem.length; index++) {
//          slideItem[index].style.left = index * 100 + "%";
// }
// const slideItems = document.querySelector('.slide-items');
// const arrowRight = document.querySelector('.fa-arrow-right');
// const arrowLeft = document.querySelector('.fa-arrow-left');
//     let i = 0;
// if(arrowRight != null && arrowLeft != null ){
//     arrowRight.addEventListener('click', () => {

//         if(i<slideItem.length - 1){
//             i++;
//             slideMove(i)
           
//         }else
//         {
//             return false
//         }
        
//     })/*auto truot slide*/
//         arrowLeft.addEventListener('click',()=>{
//         if(i<=0){
//             return false
//         }
//     {
//             i--;
//         slideMove(i)
//         }
    
// })
// }




//  //tự động trượt auto
//     function autoslide(){
//         if(i<slideItem.length)
//         {
//             i++
//             slideMove(i)
//         }
//         else{
//             i=0
//         }
      
//     }
//     function slideMove(i){
//             slideItems.style.left = -i*100+"%";
// }

// // setInterval(autoslide,5000)
// /////////menu responsive icon
// const menubar = document.querySelector('.header-bar-icon')
// const headernav = document.querySelector('.header-nav')
//     menubar.addEventListener('click',()=>{
//     headernav.classList.toggle('active')
// })


//thay thế // Khai báo các phần tử liên quan
const slideItem = document.querySelectorAll('.slide-item');
const slideItems = document.querySelector('.slide-items');
const arrowRight = document.querySelector('.fa-arrow-right');
const arrowLeft = document.querySelector('.fa-arrow-left');
const menubar = document.querySelector('.header-bar-icon');
const headernav = document.querySelector('.header-nav');

let i = 0; // Biến đếm cho slide hiện tại

// Đặt vị trí left cho từng slide-item
for (let index = 0; index < slideItem.length; index++) {
    slideItem[index].style.left = index * 100 + "%";
}

// Hàm di chuyển slide
function slideMove(index) {
    slideItems.style.transform = `translateX(-${index * 100}%)`;
    slideItems.style.transition = "transform 0.5s ease-in-out";
}

// Xử lý khi click nút mũi tên phải
if (arrowRight && arrowLeft) {
    arrowRight.addEventListener('click', () => {
        if (i < slideItem.length - 1) {
            i++;
        } else {
            i = 0; // Quay lại slide đầu tiên khi hết
        }
        slideMove(i);
    });

    // Xử lý khi click nút mũi tên trái
    arrowLeft.addEventListener('click', () => {
        if (i > 0) {
            i--;
        } else {
            i = slideItem.length - 1; // Quay lại slide cuối cùng khi ở slide đầu
        }
        slideMove(i);
    });
}

// Tự động trượt slide
function autoSlide() {
    if (i < slideItem.length - 1) {
        i++;
    } else {
        i = 0; // Quay lại slide đầu tiên
    }
    slideMove(i);
}
setInterval(autoSlide, 5000); // Thời gian tự động trượt mỗi 5 giây

// Menu responsive toggle
if (menubar && headernav) {
    menubar.addEventListener('click', () => {
        headernav.classList.toggle('active');
    });
}


//sticker header
window.addEventListener('scroll',()=>{
    if(scrollY > 50){
        document.querySelector('#header').classList.add('active')
    }
    else{
        document.querySelector('#header').classList.remove('active')
    }
})




//////////click ảnh từng ảnh khi chọn
const ImgSmall = document.querySelectorAll('.product-images-items img')
const imgBig = document.querySelector('.imgbig')
for(let index = 0; index < ImgSmall.length; index++){
    ImgSmall[index].addEventListener('click', () => {
        imgBig.src = ImgSmall[index].src
    })
}

//quantity product
const quantityadd = document.querySelectorAll('.fa.fa-plus')
const quantitysub = document.querySelectorAll('.fa.fa-minus')
const quaninput = document.querySelectorAll('.quantity-input')
        // let qty =1
if(quantitysub != null && quantityadd != null )
        {
    for(let index = 0;index < quantitysub.length; index++){
    quantityadd[index].addEventListener('click', ()=>{
                inputValue = quaninput[index].value
                inputValue ++
                quaninput[index].value = inputValue
        })
    quantitysub[index].addEventListener('click',()=>{
            inputValue = quaninput[index].value
            if(inputValue <= 1){
                return false
        }
        else{
            inputValue --
            quaninput[index].value = inputValue
        }

        })
}
}
//cuon len dau trang

