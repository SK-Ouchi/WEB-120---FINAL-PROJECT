var gallery = document.getElementById("galleryContainer");

window.addEventListener('wheel', function(e) {

  if (e.deltaY > 0) gallery.scrollLeft += 100;
  else gallery.scrollLeft -= 100;
});


/*  JavaScript associated with the W3Schools.com Top Navigation Response Exercise
Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   