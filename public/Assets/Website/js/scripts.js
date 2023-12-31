gsap.registerPlugin(ScrollTrigger);

AOS.init();

// window.onbeforeunload = function () {
//     window.scrollTo(0,0);
// };

/**
   * Back to top button
   */
// let backtotop = select('.back-to-top')
//   if (backtotop) {
//     const toggleBacktotop = () => {
//       if (window.scrollY > 100) {
//         backtotop.classList.add('active')
//       } else {
//         backtotop.classList.remove('active')
//       }
//     }
//     window.addEventListener('load', toggleBacktotop)
//     onscroll(document, toggleBacktotop)
//   }

$(document).ready(function() {
    $(".scrollLink").click(function(event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top
          }, 500);
      });
  });

  /* ---------------------------------------- Articles ------------------------------------------------------------ */

function getPageList(totalPages, page, maxLength){
    function range(start, end){
        return Array.from(Array(end - start + 1), (_, i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

    if(totalPages <= maxLength){
        return range (1, total)
    }

    if(page <= maxLength - sideWidth - 1 - rightWidth){
        return range (1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }

    if(page >= totalPages - sideWidth - 1 - rightWidth){
        return range (1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }

    return range (1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
}

    $(function(){
        var numberOfItems = $(".card-contents .cards").length;
        var limitPerPages = 6; //how many item per page
        var totalPages = Math.ceil(numberOfItems/limitPerPages);
        var paginationsSize = 3; //how many number page visible (1 2 3 ...)
        var currentPage;

        function showPage(whichPage){
            if(whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $(".card-contents .cards").hide().slice((currentPage - 1) * limitPerPages, currentPage * limitPerPages).show();

            $(".paginations  li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationsSize).forEach(item=> {
                $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page")
            });

            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
        };

        $(".paginations").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
        );

        $(".card-contents .cards").show();
        showPage(1);

        $(document).on("click", ".paginations li.current-page:not(.active)", function(){
            return showPage(+$(this).text());
        });

        $(".next-page").on("click", function(){
            return showPage(currentPage + 1);
        });

        $(".previous-page").on("click", function(){
            return showPage(currentPage - 1);
        });
    });

    

/* ---------------------------------------- Modals ------------------------------------------------------------ */

// Get the button that opens the modal
var btn = document.getElementsByClassName("modal-button");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}
    