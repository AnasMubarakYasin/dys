const header = document.getElementById("application-header");
const sidebar = document.getElementById("application-sidebar");
const main = document.getElementById("application-main");
const sidebar_btns = document.querySelectorAll("#application-sidebar-btn");
const sidebar_btn = sidebar_btns[1];
const menu_open_icon =
  '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>';
const menu_close_icon =
  '<svg class="w-6 h-6" focusable="false" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"><path d="M3 18h13v-2H3v2zm0-5h10v-2H3v2zm0-7v2h13V6H3zm18 9.59L17.42 12 21 8.41 19.59 7l-5 5 5 5L21 15.59z"></path></svg>';
const minSM = matchMedia("(min-width: 640px)");

let sidebar_open = minSM.matches;
sidebar_open = sidebar_toggle(sidebar_open);
minSM.addEventListener("change", (event) => {
  sidebar_open = minSM.matches;
  sidebar_open = sidebar_toggle(sidebar_open);
});
sidebar_btns.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    sidebar_open = sidebar_toggle(sidebar_open, !minSM.matches);
  });
});
window.addEventListener("close.hs.overlay", () => {
  sidebar_open = true;
  sidebar_btn.innerHTML = menu_open_icon;
});
function sidebar_toggle(open = false, backdrop = false) {
  if (open) {
    header.classList.add("sm:pl-64");
    main.classList.add("sm:pl-72");
    !backdrop &&
      sidebar.classList.remove(
        "hs-overlay-open:translate-x-0",
        "-translate-x-full"
      );
    backdrop && window.HSOverlay.open(sidebar);
    sidebar_btn.innerHTML = menu_close_icon;
  } else {
    header.classList.remove("sm:pl-64");
    main.classList.remove("sm:pl-72");
    !backdrop &&
      sidebar.classList.add(
        "hs-overlay-open:translate-x-0",
        "-translate-x-full"
      );
    backdrop && window.HSOverlay.close(sidebar);
    sidebar_btn.innerHTML = menu_open_icon;
  }
  return !open;
}
