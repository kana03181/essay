/*
    ハンバーガーメニュー
  */
const hamburgerButton = document.querySelector(".js-hamburger");
const body_element = document.body;
const nav_menus = document.querySelectorAll(".js-global-nav__list.-menu > a");
// console.log(nav_menus);

if (hamburgerButton) {
  hamburgerButton.addEventListener("click", (e) => {
    //aria-expanded属性を取得
    const isExpanded = e.currentTarget.getAttribute("aria-expanded") !== "false";
    //aria-expanded属性にisExpandedを反転してつける
    e.currentTarget.setAttribute("aria-expanded", !isExpanded);
    //html要素にクラスを付与
    document.documentElement.classList.toggle("is-active-drawer");
    //body要素にクラスを付与して背景を固定
    body_element.classList.toggle("is-fixed");

    nav_menus.forEach((menu) => {
      // console.log(menu);
      menu.classList.toggle("is-fadeIn");
    });
  });
}

/*
  画面リサイズ ナビゲーションのちらつきを制御
  */
let body = document.body;
let resizeTimer;

window.addEventListener("resize", function () {
  clearTimeout(resizeTimer);

  function addClassOnResize() {
    let windowWidth = document.documentElement.clientWidth;
    if (windowWidth <= 768) {
      body.classList.add("is-resize");
    } else {
      body.classList.remove("is-resize");
    }
  }

  addClassOnResize();

  resizeTimer = setTimeout(function () {
    body.classList.remove("is-resize");
  }, 250);
});

/*
    GSAP
*/
document.addEventListener("DOMContentLoaded", (e) => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.registerPlugin(TextPlugin);

  const title = document.querySelectorAll(".js-title");

  title.forEach((el) => {
    const spanText = el.innerText;

    gsap.set(el, {
      text: {
        // value: spanText,
        newClass: "cursor-active",
      },
      opacity: 0,
    });

    const tl = gsap.timeline({ paused: true });

    tl.to(el, {
      opacity: 1,
      duration: 0, // opacityを瞬時に表示させる
    })
      .to(el, {
        delay: 1,
        duration: spanText.length * 0.3, // 各文字の表示時間
        text: {
          value: spanText,
          newClass: "cursor-active",
          delimiter: "",
        },
        ease: "none",
        stagger: 0.4, // 各文字ごとの遅延
      })
      .add(() => {
        el.querySelector(".cursor-active")?.removeAttribute("class");
      }, "+=2.5");

    ScrollTrigger.create({
      trigger: el,
      start: "top 90%",

      onEnter: () => tl.play(),
      once: true,
    });
  });
});
