var typed = new Typed(".text",{
	strings: ["Mobile app  Developer","UX UI Designer","Web Developer"],
	typeSpeed: 100,
	backSpeed: 100,
	backDelay: 1000,
	loop:true
});


// about seemore button script start
$(document).ready(function aboutseemorebutton()
	{
		$(".about-invisible-content").hide();
		$(document).on('click',"#about-btn",function aboutseemorebutton()
			{
				var morelessbutton=$(".about-invisible-content").is(":visible")?'Read more':'Read less';
				$(this).text(morelessbutton);
				$(this).parent(".about-box").find(".about-invisible-content").toggle();
				$(this).parent(".about-box").find(".about-visible-content").toggle();
			});
	});
// about seemore button script end

// image slider start
    var counter = 1;
    setInterval(function imageslider(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 6){
        counter = 1;
      }
    }, 5000);
    
// image slider end

   // contact start
    const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

   // contact end