
; /* Start:"a:4:{s:4:"full";s:95:"/local/templates/landing_edtech/components/bitrix/menu/land_header_top/script.js?16905244521791";s:6:"source";s:80:"/local/templates/landing_edtech/components/bitrix/menu/land_header_top/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
function hideSect(e) {
  e.preventDefault();
  this.parentElement.parentElement.parentElement.classList.remove("showed_menu");
  this.parentElement.parentElement.parentElement.parentElement.classList.remove("open_menu");
  return false;
}

function openSect(e) {
  if (!this.parentElement.classList.contains('showed_menu')) {
    let hasChilds = false;
    for (let i = 0; i < this.parentElement.childNodes.length; i++) {
        if (this.parentElement.childNodes[i].classList) {
          if(this.parentElement.childNodes[i].classList.contains('ul_cont')){
            hasChilds = true;
            break;
          }
        }
    }

    if(hasChilds){
      this.parentElement.classList.add("showed_menu");
      this.parentElement.parentElement.classList.add("open_menu");
      return false;
    }
  }
}

function openSubSect(e) {

  console.log(document.documentElement.clientWidth);

  if(document.documentElement.clientWidth < 861){
    e.preventDefault();

    if (!this.parentElement.classList.contains('showed_submenu')) {
      this.parentElement.classList.add("showed_submenu");
      this.parentElement.parentElement.classList.add("open_submenu");

    }
    else{
      this.parentElement.classList.remove("showed_submenu");
      this.parentElement.parentElement.classList.remove("open_submenu");
    }

    return false;
  }
}

document.addEventListener('DOMContentLoaded', function(){

  let items = document.querySelectorAll(".second_lvl > .li > .header_top_menu-text");
  for (var item of items) {
    item.onclick = openSubSect;
  }

  let f_lvl_items = document.querySelectorAll(".first_lvl > .li > .header_top_menu-text");
  for (var f_lvl_item of f_lvl_items) {
    f_lvl_item.onclick = openSect;
  }

});

/* End */
;; /* /local/templates/landing_edtech/components/bitrix/menu/land_header_top/script.js?16905244521791*/
