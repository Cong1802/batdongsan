function hiddenHeader(className) {
  let element = document.querySelector(className);

  if (element) {
    element.classList.add("hidden");
  }
}

function showHiddenPopup(className, classHidden) {
  let element = document.querySelector(className);

  if (element) {
    element.classList.toggle(classHidden);
  }
}

function toogleLike(element, className) {
  if (element) {
    element.classList.toggle(className);
  }
}

function onInput(element, className, classActv) {
  if (element) {
    let value = (element.value).trim();
    let el = document.querySelector(className);

    if (el) {
      if (value) {
        el.classList.remove(classActv);
      } else {
        el.classList.add(classActv)
      }

    }
  }
}

function activeHeader(selector, classActive) {
  let element = document.querySelector(selector);

  if (element) {
    element.classList.add(classActive);
  }
}

function removeClass(selector, classActive) {
  let element = document.querySelector(selector);

  if (element) {
    element.classList.remove(classActive);
  }
}

function hoverItem(panrentElement, element, className) {
  let Elements = document.querySelectorAll(panrentElement);
  if (element && Elements) {
    element.classList.add(className);
  }
}

function clickToggleClass(element, listSelectName, className) {
  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        children[i].classList.remove(className);
      }
    }

    element.classList.add(className);
  }
}

function rmClassColor(
  element,
  listSelectName,
  className,
  defaultColor,
  changeColor,
  classNameHeaders = "",
  classHeaderView = "",
  acHeader = "",
  classContent = "",
  classContentView = ""
) {
  function change(className, clView, acView) {
    if (className != "") {
      let elHeader = document.querySelector(className);

      if (elHeader) {
        let chidren = [...elHeader.children];

        if (chidren) {
          chidren.forEach((e) => {
            if (e.classList.contains(clView)) {
              e.classList.add(acView);
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
              }
            }
          });
        }
      }
    }
  }

  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    // thay đổi phần header ẩn hiện header
    change(classNameHeaders, classHeaderView, acHeader);

    // thay đổi nội dung
    change(classContent, classContentView, acHeader);

    //
    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        let elColor = children[i].querySelectorAll("svg path");

        if (elColor) {
          elColor.forEach((e) => {
            if (e.getAttribute("stroke")) {
              e.setAttribute("stroke", defaultColor);
            } else {
              e.setAttribute("fill", defaultColor);
            }
          });
        }
        children[i].classList.remove(className);
      }
    }
    let elChangeColor = element.querySelectorAll("svg path");

    if (elChangeColor) {
      elChangeColor.forEach((e) => {
        if (e.getAttribute("stroke")) {
          e.setAttribute("stroke", changeColor);
        } else {
          e.setAttribute("fill", changeColor);
        }
      });
    }
    element.classList.add(className);
  }
}

function showHidden(
  selectorParent,
  element,
  selectorHidden,
  className,
  tl1,
  tl2,
  img1,
  img2
) {
  let parentEl = document.querySelector(selectorParent);
  let hiddenEl = document.querySelector(selectorHidden);

  if (parentEl && hiddenEl) {
    parentEl.classList.toggle(className);

    if (!parentEl.classList.contains(className)) {
      hiddenEl.style.right = `${0}px`;
      element.querySelector("span").innerText = tl1;
      element.querySelector("div img").src = img1;
    } else {
      let width = hiddenEl.offsetWidth;
      hiddenEl.style.right = `-${width}px`;
      element.querySelector("span").innerText = tl2;
      element.querySelector("div img").src = img2;
    }
  }
}

function handelLike(element, classActive, changeColor, defaultColor) {
  if (element) {
    let path = element.querySelector('svg path');

    if (path) {
      element.classList.toggle(classActive);

      if (element.classList.contains(classActive)) {
        path.setAttribute("fill", changeColor)
        path.setAttribute("stroke", changeColor)
      } else {
        path.setAttribute("fill", '')
        path.setAttribute("stroke", defaultColor)
      }
    }
  }
}

function sizeTB(className, classW, number, childBl = true) {
  let elements = document.querySelector(className);
  let elementW = document.querySelectorAll(classW);

  if (elements && elementW) {
    let child = childBl ? [...elements.children] : elements;

    if (child) {
      let index = childBl ? child.length : 1;
      let iw = number;

      if (childBl) {
        for (let i = index - number; i <= index - 1; i++) {
          if (elementW[number - iw]) {
            console.log(child)
            elementW[number - iw].style.width = `${child[i].clientWidth}px`;
            --iw;
          }
        }
      } else {
        elementW[0].style.width = `${child.clientWidth}px`;
      }
    }
  } else {
    window.removeEventListener('resize', sizeTB);
  }
}


function viewAndClosePopup(idPopup, selectorChild) {
  // hienpopup(idPopup);
  showHiddenPopup(idPopup, 'hidden')
  let infor_menu = document.querySelector(idPopup);
  if (infor_menu) {
    function hiddenOverlay(e) {
      // e.stopPropagation();
      let box_popup_infor_menu = document.querySelector(selectorChild);

      // lấy vị trí của thẻ
      let minY = box_popup_infor_menu.offsetTop;
      let minX = box_popup_infor_menu.offsetLeft;
      let maxY = parseInt(box_popup_infor_menu.clientHeight) + minY;
      let maxX = parseInt(box_popup_infor_menu.clientWidth) + minX;

      // vị trí con trỏ chuột
      let tro_x = e.x;
      let tro_y = e.y;

      if (!((tro_x >= minX && tro_x <= maxX) && (tro_y >= minY && tro_y <= maxY))) {
        infor_menu.classList.add('hidden');
      }
    }
    infor_menu.addEventListener('click', hiddenOverlay)
  }
}


function handle_show_popup(arrays) {
  function singleContent(array) {
    let element = document.querySelector(array.className);
    if (element) {
      if (array.arr === '') {
        element.innerHTML = array.noidung;
      } else {
        element.setAttribute(array.arr, array.noidung);
      }
    }
  }
  if (Array.isArray(arrays)) {
    if (arrays.length > 1) {
      for (let i = 0; i < arrays.length; i++) {
        singleContent(arrays[i]);
      }
    } else {
      singleContent(arrays[0]);
    }
  }
}


function activeChangeTable(element, classList, classNameAv, contentParent, contentView, classCTAC) {
  function change(className, clView, acView) {
    if (className != "") {
      let elHeader = document.querySelector(className);

      if (elHeader) {
        let chidren = [...elHeader.children];

        if (chidren) {
          chidren.forEach((e) => {
            if (e.classList.contains(clView)) {
              e.classList.add(acView);
              e.style.display = "block";
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
                e.style.display = "none";
              }
            }
          });
        }
      }
    }
  }
  if (element) {
    let panretClass = document.querySelector(classList);

    if (panretClass) {
      let chidrenEL = [...panretClass.children];

      chidrenEL.forEach((e) => {
        if (e.classList.contains(classNameAv)) {
          e.classList.remove(classNameAv);
        }
      })

      element.classList.add(classNameAv);
      change(contentParent, contentView, classCTAC)
    }
  }
}

function onScrollHeader(classHeader, classAdd, startClassPostion) {
  let header = document.querySelector(classHeader);
  let elemenStart = document.querySelector(startClassPostion);

  if (header && elemenStart) {
    window.onscroll = function () {
      let start = elemenStart.offsetTop;
      let y = window.scrollY;

      if (y >= start) {
        if (header.classList.contains(classAdd)) {
          header.classList.remove(classAdd);
        }
      } else {
        header.classList.add(classAdd);
      }
    }
  }
}


// function CheckSize(classMaxSize, style) {
//   let elMaxSize = document.querySelector(classMaxSize);

//   if (elMaxSize) {
//     let MaxSize = elMaxSize.offsetWidth;

//     if (MaxSize) {
//       let childrenElements = [...elMaxSize.children]

//       if (childrenElements) {
//         let size = 0;
//         let row = 0;
//         let col = 0;
//         childrenElements.forEach((element) => {
//           childrenSize(element, MaxSize, style)
//         })


//         function childrenSize(child, maxSize, style) {
//           let widthChild = child.offsetWidth;
//           let text = window.getComputedStyle(child).getPropertyValue("margin-left");
//           var number = text.match(/\d/g);
//           number = number.join("");

//           size += col == 0 ? (widthChild + parseInt(number)) : widthChild;
//           if (size > maxSize) {
//             row++;
//             size = 0;
//             col = 0
//           }

//           if (col == 0) {
//             styleElement(child, 'margin-left', '0px')
//           }

//           if (row > 0) {
//             if (typeof style === 'object') {
//               for (let key in style) {
//                 styleElement(child, key, style[key])
//               }
//             }
//           }

//           col += 1;


//           function styleElement(element, styleName, valueStyle) {
//             element.style[styleName] = valueStyle;
//           }
//         }
//       }
//     }
//   }
// }

function scrollSelector(nextArrow, prevArrow, scrollElement) {
  let elNext = document.querySelector(nextArrow);
  let elPrev = document.querySelector(prevArrow);
  let elementScroll = document.querySelector(scrollElement);

  if (elNext && elPrev && elementScroll) {
    let oneChild = [...elementScroll.children][0];
    let widthEl = [...oneChild.children];
    let isClick = true;
    let widthChild = widthEl[0].clientWidth;
    let maxScroll = widthEl.length * widthChild;
    let scrollX = 0;

    function handelScroll() {
      let x = elementScroll.scrollLeft;
      if (x <= maxScroll) {
        if (isClick === true) {
          scrollX = x + widthChild;
        } else {
          scrollX = x - widthChild;
        }
      } else {
        scrollX = elementScroll.scrollLeftMax
      }

      $(elementScroll).animate({
        scrollLeft: scrollX
      }, 300)
    }

    elNext.onclick = function () {
      isClick = true;
      handelScroll();
    }

    elPrev.onclick = function () {
      isClick = false;
      handelScroll();
    }
  }
}

function viewScreen(classElementShow, classHidden, pointMin, pointMax) {
  let elementShow = document.querySelector(classElementShow);
  if (elementShow) {
    window.onresize = function () {
      let x = window.innerWidth;

      if (x >= pointMin && x <= pointMax) {
        elementShow.classList.remove(classHidden);
      } else {
        elementShow.classList.add(classHidden);
      }

    }
  } else {
    window.onresize = null;
  }
}


function moveItem(parentMoveItem, appendElement, number, startpostion = 'left', breakpointMin, breakpointMax) {
  let parentElementMove = document.querySelector(parentMoveItem);
  let appentElement = document.querySelector(appendElement);

  function childrenMove(parentElementMove) {
    let child = [...parentElementMove.children];
    let arr = [];

    if (startpostion === 'right') {
      for (let i = child.length - 1; i > 0; i--) {
        if (number > 0) {
          arr.unshift(child[i])
        }
      }

      return arr;
    }
  }

  if (parentElementMove && appentElement) {
    let widthClient = window.innerWidth;

    if (widthClient >= breakpointMin && widthClient <= breakpointMax) {
      console.log(widthClient)
    }

  }
}


function Copyied(element, classCopyied) {
  let ElementCopy = document.querySelector(classCopyied);

  if (ElementCopy) {
    var r = document.createRange();
    r.selectNode(ElementCopy)
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();

    ElementCopy.oncopy = function () {
      let child = [...element.children];
      child.forEach((e) => {
        if (e.classList.contains('message_copytied')) {
          e.remove();
          clearTimeout();
        }
      })
      let span = document.createElement('span');
      span.className = "message_copytied";

      span.innerText = 'Copy thành công';
      element.appendChild(span);

      let stTimeOut = setTimeout(() => {
        span.style.transition = 'all .4s ease';
        span.style.opacity = '0';
        span.style.overflow = 'hidden';
      }, 2000)

      let removeSpan = setTimeout(() => {
        span.remove();
      }, 2500)
    }
  }
}

function change(className, clView, acView) {
  if (className != "") {
    let elHeader = document.querySelector(className);

    if (elHeader) {
      let chidren = [...elHeader.children];

      if (chidren) {
        chidren.forEach((e) => {
          if (e.classList.contains(clView)) {
            e.classList.add(acView);
            e.style.display = "block";
          } else {
            if (e.classList.contains(acView)) {
              e.classList.remove(acView);
              e.style.display = "none";
            }
          }
        });
      }
    }
  }
}


function sliderBarScroll() {
  let slide_bar_item = document.querySelectorAll('.filter_item');
  if (slide_bar_item) {

    slide_bar_item.forEach(e => {
      $(e).children('.children_menu').css('display', 'none');
      $(e).children('.filter_name').click((event) => {
        event.preventDefault();
        let element = $(e).children('.filter_name');
        let menu = $(element).siblings('.children_menu');

        if (menu.length <= 0) {
          $(slide_bar_item).not($(e)).each((i, elem) => {
            let child = $(elem).children('.acive_mnc1');
            $(child).removeClass('acive_mnc1');
          })
          $(element).addClass('acive_mnc1');
          return;
        } else {
          $(slide_bar_item).not($(e)).each((i, elem) => {
            let child = $(elem).children('.acive_mnc1');
            $(child).removeClass('acive_mnc1');
            let childDrop = $(elem).children('.children_menu');
            if (childDrop) {
              $(childDrop).slideUp(300);
            }
          })
          $(element).siblings('.children_menu').slideToggle(300)
        }
        $(element).addClass('acive_mnc1');
      })
    })
  }
}
sliderBarScroll()

// -----------------------------JS QUANG ------------------
$('#ds_theodoi').click(function () {
  $('.records_375_img').toggleClass('rotate_icon');
})

// popup quan ly doi nhom 3 cham
$('.popup_3_cham').click(function() {
  $(this).parents('.item_ct').find('.popup_muaban').toggleClass('hidden');
})
// đẩy tin 
$('.click_day_tin').click(function() {
  $('.popup_daytin').removeClass('hidden');
})
$('.overlay ,.close').click(function() {
  $('.overlay_dong').addClass('hidden');
})
// đẩy tin con
$('.popup_daytin_noidung_bt_uptin_text').click(function() {
  $('.popup_daytin_con').removeClass('hidden');
})
// -------ghim tin
$('.click_ghim_tin').click(function() {
  $('.popup_gimtin').removeClass('hidden');
})
// -------- xóa tin
$('.click_delete').click(function() {
  $('.popup_xoa').removeClass('hidden');
})
// -------- chat với chúng tôi
$('.popup_daytin_noidung_bt_chat').click(function() {
  $('.popup_chat_ad').toggleClass('hidden');
})
$('.popup_chat_ad_close').click(function() {
  $('.popup_chat_ad').addClass('hidden');
})

// quản lý hồ sơ 

// $('.click_kh_diem').click(function() {
//   $('.table_transaction').addClass('viewsActivePeople');
//   $('.potential').removeClass('viewsActivePeople');
// })
// function client_potential(kh_click) {
//   $('.content_list').removeClass('viewsActivePeople');
//   $('.potential').addClass('viewsActivePeople');
//   $('.click_kh').removeClass('acive_mnc1_mb')
//   $(kh_click).addClass('acive_mnc1_mb');
//   $('.click_acive').removeClass('acive_mnc1_mb');
//   $('.table_transaction').removeClass('viewsActivePeople');
// }

$('#select_chon_kh').change(function () {
  let value = $(this).val();
  if (value == '1') {
    change('.content_ft','follower','viewsActivePeople')
  } else {
    change('.content_ft','watching','viewsActivePeople')
  }
})
$('.chantrang_menu_icon').click(function(){
  $('.header_chantrang_menu_1024').removeClass('hidden')
})


// -----------------------------JS QUANG ------------------
$('#ds_theodoi').click(function () {
  $('.records_375_img').toggleClass('rotate_icon');
})

// popup quan ly doi nhom 3 cham
$('.popup_3_cham').click(function() {
  $(this).parents('.item_ct').find('.popup_muaban').toggleClass('hidden');
})
// đẩy tin 
$('.click_day_tin').click(function() {
  $('.popup_daytin').removeClass('hidden');
})
$('.overlay ,.close').click(function() {
  $('.overlay_dong').addClass('hidden');
})
// đẩy tin con
$('.popup_daytin_noidung_bt_uptin_text').click(function() {
  $('.popup_daytin_con').removeClass('hidden');
})
// -------ghim tin
$('.click_ghim_tin').click(function() {
  $('.popup_gimtin').removeClass('hidden');
})
// -------- xóa tin
$('.click_delete').click(function() {
  $('.popup_xoa').removeClass('hidden');
})
// -------- chat với chúng tôi
$('.popup_daytin_noidung_bt_chat,.icon_chat_375_2').click(function() {

  $('.popup_chat_ad').toggleClass('hidden');
})
$('.popup_chat_ad_close').click(function() {
  $('.popup_chat_ad').addClass('hidden');
})

// quản lý hồ sơ 

// $('.click_kh_diem').click(function() {
//   $('.table_transaction').addClass('viewsActivePeople');
//   $('.potential').removeClass('viewsActivePeople');
// })
// function client_potential(kh_click) {
//   $('.content_list').removeClass('viewsActivePeople');
//   $('.potential').addClass('viewsActivePeople');
//   $('.click_kh').removeClass('acive_mnc1_mb')
//   $(kh_click).addClass('acive_mnc1_mb');
//   $('.click_acive').removeClass('acive_mnc1_mb');
//   $('.table_transaction').removeClass('viewsActivePeople');
// }

$('#select_chon_kh').change(function () {
  let value = $(this).val();
  if (value == '1') {
    change('.content_ft','follower','viewsActivePeople')
  } else {
    change('.content_ft','watching','viewsActivePeople')
  }
})
$('.chantrang_menu_icon').click(function(){
  $('.header_chantrang_menu_1024').removeClass('hidden')
})


// copu thành công
function Copyied(element, classCopyied) {
  let ElementCopy = document.querySelector(classCopyied);

  if (ElementCopy) {
      var r = document.createRange();
      r.selectNode(ElementCopy)
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(r);
      document.execCommand('copy');
      window.getSelection().removeAllRanges();

      ElementCopy.oncopy = function() {
          let child = [...element.children];
          child.forEach((e) => {
              if (e.classList.contains('message_copytied')) {
                  e.remove();
                  clearTimeout();
              }
          })
          let span = document.createElement('span');
          span.className = "message_copytied";

          span.innerText = 'Copy thành công';
          element.appendChild(span);

          let stTimeOut = setTimeout(() => {
              span.style.transition = 'all .4s ease';
              span.style.opacity = '0';
              span.style.overflow = 'hidden';
          }, 2000)

          let removeSpan = setTimeout(() => {
              span.remove();
          }, 2500)
      }
  }
}

document.querySelector('.copyied').onclick = function() {
  Copyied(document.querySelector('.copyied'), '.copy')
}
