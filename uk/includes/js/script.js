// //alert("Hello Good Evening");

// x = 10;

// y = 6;

// z = x + y; 

// z = 10 + 6;

// x = 9;

// z = x + y;

// z = 99;

// document.getElementById("result").innerHTML = z;

// document.getElementById("result").innerHTML = z;


//alert("hello");

function add(){
   x = document.getElementById("fnum").value ;
   y = document.getElementById("snum").value ;
   mul = x * y;
   alert(mul);
}

$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });


  return false;
});
