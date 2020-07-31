/* start javascript*/

//====================== menu đổi màu ============================//
window.onscroll = function() {
    myFunction()
};

function myFunction() {

    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("navmain").className = "navmain2";
    } else {
        document.getElementById("navmain").className = "navmain";
    }

}
// navbar btn
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
const navbarSub = document.querySelector('.navbar-sub__nav');
menuBtn.addEventListener('click', () => {
        if (!menuOpen) {
            menuBtn.classList.add('open');
            navbarSub.style.transform = 'translateX(0%)';
            menuOpen = true;
        } else {
            menuBtn.classList.remove('open');
            navbarSub.style.transform = 'translateX(-100%)';
            menuOpen = false;
        }
    })
    // end navbar btn