//CONTADOR DE NÚMEROS

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}


// //HEADER SROLL

// var oS = 0;

// $(document).scroll(() => {
//     var sT = $(document).scrollTop();
//     var sY = window.scrollY;

//     if (sT == 0) {
//         $('header').removeClass('_re')
//     } else {
//         $('header').addClass('_re')
//     }

//     if (sT !== 0) {
//         $("header").addClass("_hi");
//         $(".scroll_icon").addClass("_hi");
//     } else {
//         $("header").removeClass("_hi");
//         $(".scroll_icon").removeClass("_hi");
//     }

//     let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value

//     if (currentScroll > 0 && oS <= currentScroll) {
//         console.log('a')
//         oS = currentScroll;
//     } else {
//         console.log('b')
//         $("header").removeClass("_hi");
//         oS = currentScroll;

//     }


//     console.log(scroll_direction())

// })

// var empty;

// (function ($) {
//   $.fn.showModal = function () {
//     $(this).attr('show', '');

//     return this;
//   }


//   $.fn.hideModal = function () {
//     $(this).removeAttr('show');
//     return this;
//   }

// })(jQuery);

// $('.niv-modal .niv-modal-close, .niv-modal .niv-modal-icon, .niv-modal button.cancel').click(function () {
//   $($(this).closest('div.niv-modal')).hideModal()
// })

// $('button[niv-modal]').click(function () {
//   $(`.niv-modal.${$(this).attr('.niv-modal')}`).showModal();
// })
// // NIV-FOLLOW

// $(document).ready(() => {

//   // SET
//   $('[niv-follow]').each(function () {
//     var min = $(this).attr('niv-follow').split('-')[0];
//     var max = $(this).attr('niv-follow').split('-')[1];

//     $(this).css('transform', `translateY(${min}px)`);
//   })


// })



// function nivFollow(scrollDirection) {
//   $('[niv-follow]').each(function () {
//     var min = $(this).attr('niv-follow').split('-')[0];
//     var atual = parseInt($(this).css('transform').split(',')[5]);
//     var max = $(this).attr('niv-follow').split('-')[1];

//     var statementUP = atual > min ? true : false;
//     var statementDOWN = atual < max ? true : false;

//     if (!($(document).scrollTop() >=
//       $(this).closest('div.niv').offset().top -
//       ($(window).height() * 3) / 4)) return false;

//     if (!scrollDirection) {
//       if (statementDOWN) {
//         $(this).css('transform', `translateY(${atual + 20}px)`);
//       }
//     }
//     else {
//       if (statementUP) {
//         $(this).css('transform', `translateY(${atual - 40}px)`);
//       }
//     }
//   })
// }



/////////////////////////////////



var error_index = {
  "001": "Ta na nóia? Classe inválida, mano???!!",
  "002": "Cara......... faltou estrutura",
  "003": "Achamo saporra não fi"
};

function execute_error(id, item) {
  console.error(`================================ ~ #NIV-ERROR# ~ ================================ \n código: ${id} \n descrição: ${error_index[id]}\n objeto:`);
  console.error(item);
  console.error(`================================ ~ #NIV-ERROR# ~ ================================`)
}

function n$(param) {
  var selected = document.querySelector(`${param}`);
  if (selected) {
    return selected;
  } else {
    execute_error("003", param);
  }
}

var validate_item = (item) => {
  var params = item.getAttribute("n-class").valueOf().split(' ');

  params.forEach(param => {
    switch (param) {

      // CLASSES RELACIONADAS À MODAL
      case "modal":
        item.show = function () {
          item.setAttribute('show', '');
        };
        item.hide = function () {
          item.removeAttribute('show', '');
        };

        var modal_close = document.createElement('div');
        item.appendChild(modal_close);
        modal_close.setAttribute('n-class', 'modal-close')


        modal_close.addEventListener("click", () => {
          item.closest(n$('[n-class="modal"]').hide());
        })


        break;

      case "modal-box":
        break;

      case "modal-content":
        break;

      case "modal-close":
        item.addEventListener("click", () => {
          item.closest(n$('[n-class="modal"]').hide());
        })
        break;

      case "modal-close-button":
        item.addEventListener("click", () => {
          item.closest(n$('[n-class="modal"]').hide());
        })
        break;

      case "modal-close-icon":
        item.addEventListener("click", () => {
          item.closest(n$('[n-class="modal"]').hide());
        })
        break;


      // CLASSES RELACIONAS À FADE

      case "fade":
        if (item.closest("[n-class=niv]")) {

          item.setAttribute('range', 'out');


          if (params.includes('--initial')) {
            setTimeout(() => {
              item.setAttribute('range', 'initial');
            }, 2000)
          }
          if (params.includes('--initial--no-delay')) {
            item.setAttribute('range', 'initial');
          }

          document.addEventListener('scroll', () => {
            var document_st = Math.ceil(document.documentElement.scrollTop);
            var window_h = window.innerHeight;

            if (params.includes('--initial')) {
              item.setAttribute('range', 'initial');
            } else {
              if (already_screemed(item)) {
                item.setAttribute('range', 'in');
              } else {
                item.setAttribute('range', 'out');
              }
            }
          }, false);
        } else {
          execute_error("002", item);
        }

        break;


      case "refresh":
        window.addEventListener('nivRefresh', event => {
          item.removeAttribute('refresh');
        });
        break;

      case "magnet":
        if (item.closest("[n-class=niv]") && item.getAttribute("n-magnet")) {
          var areaItem = item.closest('section');
          var movelItem = item;
          var moveValue = item.getAttribute("n-magnet").valueOf();


          areaItem.addEventListener('mousemove', (e) => {
            showX = e.pageX - getOffset(movelItem).left - movelItem.offsetWidth / 2;
            showY = e.pageY - getOffset(movelItem).top - movelItem.offsetHeight / 2;

            movelItem.setAttribute('style', `transform-style: preserve-3d; transform: translate3d(${(showX / moveValue)}px, ${(showY / moveValue)}px, 0px)`);
          })
        } else {
          execute_error("002", item);
        }


        break;

      // CLASSES DE HEADER
      case "header":
        document.addEventListener('scroll', () => {
          var document_st = Math.ceil(document.documentElement.scrollTop);
          if (!scroll_direction()) {
            item.setAttribute('hide', '');
          } else {
            if (document_st == 0) {
              item.removeAttribute('hide');
              item.removeAttribute('minus');
            } else {
              item.removeAttribute('hide');
              item.setAttribute('minus', '');
            }
          }
        })

        break;

      // CLASSES RELACIONADAS À GRID
      case "fluid":
        break;
      case "niv":
        break;

      // CLASSES RELACIONADAS À BACKDROP
      case "splash":
        item.setAttribute('hide', '');
        break;


      case "transition":
        item.setAttribute('hide', '');
        break;


      // CLASSES RELACIONADAS À TOOLTIP
      case "title":
        var title = item.getAttribute("title").valueOf();
        var element = document.createElement('span');

        item.appendChild(element);
        element.setAttribute('n-class', "--tooltip")
        element.innerText = title;

        break;


      // CLASSES DE TABS E CONTENTS
      case "tab":
        item.addEventListener("click", () => {
          console.log(item.getAttribute('n-tab'));
          n$(`[n-tab-group=${item.getAttribute('n-tab-group')}] [n-tab-content=${item.getAttribute('n-tab')}]`).setAttribute('active', '');
        })
        break;
      case "tab-content":
        break;

      // SUB CLASSES RELACIONADAS À ORIENTAÇÃO
      case "--right":
        break;
      case "--left":
        break;
      case "--top":
        break;
      case "--bottom":
        break;
      case "--initial":
        break;
      case "--initial--no-delay":
        break;



      // DEFAULT
      default:
        execute_error("001", item);
        break;
    }
  })
}



// UTIL
var oS = 0;
var scroll_direction = () => {

  let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value

  if (currentScroll > 0 && oS <= currentScroll) {
    // SCROLL BOTTOM
    oS = currentScroll;
    return false;
  } else {
    // SCROLL TOP
    oS = currentScroll;
    return true;
  }
};

var is_screemed = (obj) => {
  var document_st = Math.ceil(document.documentElement.scrollTop);
  var window_h = window.innerHeight;

  // console.log(obj.offsetHeight)

  if ((document_st >= obj.closest("[n-class=niv]").offsetTop - (window_h * 3) / 4) && (document_st < (obj.closest("[n-class=niv]").offsetTop + obj.offsetHeight))) {
    return true;
  } else {
    return false;
  }
}

var already_screemed = (obj) => {
  var document_st = Math.ceil(document.documentElement.scrollTop);
  var window_h = window.innerHeight;

  // console.log(obj.offsetHeight)

  if ((document_st >= obj.closest("[n-class=niv]").offsetTop - (window_h * 3) / 4)) {
    return true;
  } else {
    return false;
  }
}


var update_states = () => {
  const class_components = document.querySelectorAll("[n-class]"),
    action_components = document.querySelectorAll("[niv-action]");

  class_components.forEach(item => {
    validate_item(item);
  })
}


(function () {
  update_states();
})();



function toggleAttr(item, attr) {
  if (n$(item).attr(attr) == '') {
    n$(item).removeAttribute(attr)
  } else {
    n$(item).attr(attr, '')
  }
  return item;
}


// (function (item) {
//   item.fn.toggleAttr = function (attr) {

//   }
// })();



function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY
  };
}



// window.addEventListener('checarComponente', event => {
//   n$('[n-class="refresh"]')
//     .removeAttribute('refresh');
// });

// (function () {
//   n$('[n-class*="refresh"]')
//     .removeAttribute('refresh');
// })();

console.log("\n%c conectado. %c🖖 niv.lib - by @hyp8tec ", "text-style:none;  font-family: consolas; color:$white; background-color: #28a745; padding: 5px; margin-right: 15px;", "text-style:none; font-family: consolas; margin-bottom: 10px; color:#28a745; ")

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });



$('form label input[name = "telefone"]').mask("(00) 00000-0000");
$('form label input[name = "expiracao"]').mask("00/0000");
$('form label input[name= "numero"]').mask("0000 0000 0000 0000");


// console.log("%c👋 Opa, bom dia!\n%cEstá perdido? a estrada é pelo %coutro lado!!\n%cMas já que já está aqui, da uma olhadinha no nosso site\n%chttps://hyp8.com.br ✨", "font-family: consolas;", "font-family: consolas;", "font-family: consolas; font-weight: bold;color: red;", "font-family: consolas;", "font-family: consolas; color:$FF3434; ")


console.log("\n%cmade with ❤ by %c@hyp8tec", "text-style:none;  font-family: consolas; color:$white; background-color: #ff3434; padding: 5px; margin-top: 5px; margin-bottom: 15px;", "text-style:none;  font-family: consolas; color:#fff; background-color: #ff3434; padding: 5px; margin-top: 5px; margin-bottom: 15px;")


function send_whatsapp(number, text) {
  window.open(`https://api.whatsapp.com/send?phone=${number}&text=${text}`)
}

function share_facebook(title, link) {
  window.open(`https://www.facebook.com/sharer/sharer.php?u=${title}+${link}`);
}
function share_linkedin(title, link) {
  window.open(`htttp://www.linkedin.com/shareArticle?mini=true&url=${link}`)

}
function share_twitter(title, link) {
  window.open(`http://twitter.com/intent/tweet?text=${title}&url=${link}`);
}



function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// // MODALS

// setTimeout(() => {
//     $('.modal_box').showModal()
// }, 3000);



// //SETAR CLICKS

// $(document).ready(function () {
// })



(function ($) {
  $.fn.toggleAttr = function (attr) {
    if ($(this).attr(attr) == '') {
      $(this).removeAttr(attr)
    } else {
      $(this).attr(attr, '')
    }
    return this;
  }

})(jQuery);

$(document).ready(() => {
  $('header div[n-class=niv] button.mobile-menu').click(() => {
    $('header div[n-class=niv] div.menu').toggleAttr('show');
  })


  $('section.modules div[n-class=niv] div.niv-area div.modules-side details').click(function () {
    $('section.modules div[n-class=niv] div.niv-area div.modules-side details').removeAttr('open');
  })

  $('.--open-video').click(() => {
    n$('#video_modal').show();
  })
})



