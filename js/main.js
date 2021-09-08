




$(document).ready(function () {
  $('.carousel').carousel()
  $('.gallery .gallery-item').slice(0, 4).show();
  $('.gallery .gallery-item').slice(4, 100).hide();
  var items = 100;
  var shown = 4;
  $('.more').click(function () {
    shown = $('.gallery .gallery-item:visible').length + 2;
    if (shown < items) {
      $('.gallery .gallery-item:lt(' + shown + ')').show(300);
    } else {
      $('.gallery .gallery-item:lt(' + items + ')').show(300);
      $('.more').hide();
    }
  });
});


/* Close */
function closeNav() {
  document.getElementsByClassName("myNav")[0].style.height = "0%";
  document.getElementsByClassName("myNav")[1].style.height = "0%";
  document.getElementsByClassName("myNav")[2].style.height = "0%";
  document.getElementsByClassName("myNav")[3].style.height = "0%";
  $(".overlay.member").removeClass("pointer-event-rm")

}
$(".loaders-container").show();
$(document).ready(function () {


  $('li.active').removeClass('active');
  $('a[href="' + decodeURI(location.pathname) + '"]').closest('li').addClass('active');

  $(".loaders-container").fadeOut("slow", function () {
  });
  /* Open */
  function openNavAb() {
    document.getElementById("about").style.height = "100%";
  }

  function openNavAc() {
    document.getElementById("activit").style.height = "100%";
  }

  function openNavPu() {
    document.getElementById("publications").style.height = "100%";
  }
  function openNavTo() {
    document.getElementById("tools").style.height = "100%";
  }
  var quote = {
    'Eya Bourghiba': "Although I was a new member of IEEE INSAT SB, Industry Applications Society gave me the opportunity to be part of the executive board of 2016/2017. I jumped at it and became the communication manager. Since that day, I knew that it’s going to be a mind blowing experience. It's not a simple feeling of being active and making a change. It's about a whole life, it’s about relations you establish, about the sense of family that is born into our community and it's about responsibilities and group management. IAS helped me not only on developing my soft skills but on enlarging my professional network. It taught me a lot about my career as an instrumentation and maintenance engineer and made me realize that I was way behind when it comes to dealing with real industry equipment. I’m sure that this is only the begging and that being a part of IEEE family is the part of my life which is going to make of me a potential leader. All I can tell you is dare to take risks, leap at your chances and go forward.i ",
    'Zakia Ben Karouia': "It's all about risking the usual and stepping outside of the confort zone that you can reach the stars. thus Being a member of the IAS Insat Student Chapter's Board was a big step forward for me. Having the opportunity to be surrounded by professional and hardworking people only encouraged me to overcome my weaknesses and take a leap of faith to the unknown, opening up a world of opportunities which led to the improvement of both my soft and technical skills. And as we always say, IEEE IAS Insat is more than just a chapter, it's a family ! ",
    'Mariem Jemmali': " Deciding to follow the saying ''Place yourself where you can grow'' and joining IEEE and the IAS family was one of the best decision I ever made. In fact, being part of this team gave me the opportunity to discover myself, to meet a lot of amazing, inspiring and talented people from whom I learned a lot. Besides, it helped me to develop my technical and soft skills further, broaden my knowledge and expand my professional network. Simply it made me grow! And here's my message to everyone ''Go beyond what makes you comfortable, Open yourself to ideas, events, relationships, get involved, it's REALLY worth it !' ",
    'Skander KHELIL': "The secret of change is to focus all your energy, not on fighting the old, but on building the new Industry Applications Society allowed me the opportunity to be in contact with people from different countries, not only within IEEE but also with students and professionals from across the globe. It is because of IAS that I have developed my skills and learnt a lot about myself and the world. IAS taught me about the industry, and gave me the opportunity to develop, not only within the chapter but also as a person.Adapt.. Evolve.. Become.",
    'Naouel CHERIF': " Getting involved with IEEE in a first place was a life-changing experience,I got the opportunity to get out of my comfort zone and explore different aspects of my personality that I never knew even existed. After joining IAS,I realized the importance of hard work in order to achieve common goal within a team.I feel very confident in saying that dedicating my spare time for IAS is helping me develop and improve my skills that I will need for my future career as an engineer.In addition,I believe owning good community leadership skills is a never ending process of training,education and experience,and IAS is playing a very important role in this process. ",
    'Ahmed Khabkhab': "i'm not that kind of person who run for positions within clubs or anything I'm that person who do The job that no one can do, that one person who stay behind camera. But my experience within IAS INSAT SB Chapter changed my perspective of life. I've become an optimistic person, a person who takes the lead. As VP of Logistic & treasury I learned how to ensure the necessary logistic and finance needs to ensure the success of our events. IAS took me to a whole new level. To our followers, to the next IAS board to anyone who's reading my pathway I say Take the lead, break your silence, embrace yourself, just go for it. You'll never know!",
    'ARBAOUI Med Ali': " As an applied chemistry-biology student, I’ve always seen a plethora of opportunities in working with the IAS chapter that can help me throughout my studies and after graduation. I’ve always believed that there was a lot of potential in this society for applied chemistry-biology students like myself to exploit and benefit from, waiting for someone to reveal it. And I’ve been striving ever since to seek it out. I find myself now, as general secretary, more capable of sharing the opportunities I’ve had with my fellows. I encourage everyone to embark on this journey with us and pursue that same potential to benefit themselves and their peers. ",
    'BEJI Mariam': "As much as we love the warm red tones of the stone walls of our university, its greatest value is the daily reminder of the infinite opportunities that lay beyond them. I personally feel that IAS INSAT Student Chapter is my door-opener. Through constructive experiences, it deepens my knowledge and broadens my professional horizons. And thanks to my position in the IAS executive board I can influence and get influenced: I will get to help other students chase their own opportunities and allow myself to think and reflect alongside future Tunisian leaders. ",
    'Islem CHERIF': "2 years ago, If you ask me what does it mean IAS to you, I'll say it's just 3 words! Nowadays it's much more than that. Through my membership within the society, I met a lot of people, learnt a lot and developped my hard skills as well as my softs skills and all that thanks to the benefits and opportunities given by IAS. If I could do it all over again, I would still pick IAS INSAT SBC as my family! Because the path worth it! ",
    'FOURATI Houssem': "Step out there and just do it is one of things I have learned when I joined IAS, this amazing community that keeps inspiring you to aim of the best and exceed your expectations. Being able to meet talented, motivated and interesting people who help you discover a new side of yourself everyday while further developing your skills and broadening your horizons, stepping out of your comfort zone and making a change, this is what this community keeps offering. It is certainly a blissful experience and I will keep striving to ascend to new levels with this big family ",
    'JANNENE Dalia': " Go beyond what makes you comfortable”, this is the key to development. Being a member of the IAS INSAT chapter’s board is a great opportunity to grow personally and professionally. Meeting professionals from different backgrounds enlarges my knowledge, my network and enhances my professional communication skills. Working with a team to achieve common goals helps refine my soft skills, discover my hidden abilities and uncover new aspects of my personality. Joining IAS family is a life changing experience! ",
    'MGHIRBI Ilef': " « No one can whistle a symphony. It takes a whole orchestra to play it », they say. By joining IEEE IAS chapter, I believe that working with great teams, being part of interesting projects and benefiting from the opportunities it provides will definitely improve your skills. I advise everyone willing to develop their personality and live a once-in-a-lifetime experience to join us on this exciting journey. ",
    'Kais Bedioui': " My experience as IAS INSAT SBC chair was as expected and more. Way more. Although it wasn't my first time as a chairperson of a university entity, this mandate was surely the most special one.It allowed me to work with an outstanding group of people, and together we managed to give our members a versatile industrial experience, we worked on many fields that allowed us, as I like to believe, broaden many people's knowledges, in many different ways.I am sure that this experience helped me give back to INSAT's students what IEEE gave me during these 2 years of membership.",
    'Sameh Zaguia': "IEEE was the first club that I decided to be part of in university. In my second year, it changed my perception of education: it has taught me a lot of new things and introduced me to the right people who never failed to push me and encourage me to give my best. I volunteered in different positions, and I thought 'that was it'. But then I realized that I have never had the courage to step in and run for a front-line position, one like the chairwoman of INSAT IAS! And here I am! I am very grateful for the opportunities that IAS has given me, and I cannot wait to give back and carry on the amazing work the past committees have done. Any final words? Join IAS for a wonderful journey of learning and networking! ",
    'TERBOUBI Rania': "“Every new experience brings its own maturity and a greater clarity of vision. “ . Being part of IAS last year was one of the most amazing experiences I have ever had. I met great people, developed my soft and technical skills and learned a lot. It made me grow! I knew right then that that was only the beginning of my path with IEEE family. This what I learnt: through life you won’t find success by doing nothing but it can be made when you embrace and commit to life-changing positive habits. All I can tell you is push yourself because no else is going to do it for you, open up and go beyond your comfort zone to discover who you really are and what you really want.",
    'Zakaria Naaija': "2019 was the year I decided to join IEEE as a webmaster. It's nice to exercise my passion as a software engineer student to be part of one of IEEE chapters in my university, not only that but also to try to help our SB for other awards and succeeds. it's not just a club! It's a familty.. Thanks IAS!"


  };
  //-- Nav overlay clickthrough fix
  $(".collapse.navbar-collapse a").click(function () {
    $(".overlay.member").addClass("pointer-event-rm")
  })

  // -------------------
  $(".member-details").mouseenter(function () {
    var thiss = $(this);
    $(".team-overview .name").animate({ 'opacity': 0 }, 300, function () {
      $(this).text(thiss.find("h3").text()).animate({ 'opacity': 1 }, 300);
    });

    $(".team-overview .position").animate({ 'opacity': 0 }, 300, function () {
      $(this).text(thiss.find("p").text()).animate({ 'opacity': 1 }, 300);
    });

    $(".team-overview .quote").animate({ 'opacity': 0 }, 300, function () {
      console.log(thiss.find("h3").text());
      $(this).text(quote[thiss.find("h3").text()]).animate({ 'opacity': 1 }, 300);
    });

  });

  //team-overview name position quote

  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });


  $('a[href*=\\#]').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
  });

  $(".navbar .about").on('click', (e) => {
    e.preventDefault();
    openNavAb();

  })

  $(".navbar .activities").on('click', (e) => {
    e.preventDefault();
    openNavAc();

  })

  $(".navbar .publications").on('click', (e) => {
    e.preventDefault();
    openNavPu();

  })
  $(".navbar .tools").on('click', (e) => {
    e.preventDefault();
    openNavTo();

  })


  var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;
  ;

  // Testim Script
  function playSlide(slide) {
    for (var k = 0; k < testimDots.length; k++) {
      testimContent[k].classList.remove("active");
      testimContent[k].classList.remove("inactive");
      testimDots[k].classList.remove("active");
    }

    if (slide < 0) {
      slide = currentSlide = testimContent.length - 1;
    }

    if (slide > testimContent.length - 1) {
      slide = currentSlide = 0;
    }

    if (currentActive != currentSlide) {
      testimContent[currentActive].classList.add("inactive");
    }
    testimContent[slide].classList.add("active");
    testimDots[slide].classList.add("active");

    currentActive = currentSlide;

    clearTimeout(testimTimer);
    testimTimer = setTimeout(function () {
      playSlide(currentSlide += 1);
    }, testimSpeed)
  }

  testimLeftArrow.addEventListener("click", function () {
    playSlide(currentSlide -= 1);
  })

  testimRightArrow.addEventListener("click", function () {
    playSlide(currentSlide += 1);
  })

  for (var l = 0; l < testimDots.length; l++) {
    testimDots[l].addEventListener("click", function () {
      playSlide(currentSlide = testimDots.indexOf(this));
    })
  }

  playSlide(currentSlide);

  // keyboard shortcuts
  document.addEventListener("keyup", function (e) {
    switch (e.keyCode) {
      case 37:
        testimLeftArrow.click();
        break;

      case 39:
        testimRightArrow.click();
        break;

      case 39:
        testimRightArrow.click();
        break;

      default:
        break;
    }
  })

  testim.addEventListener("touchstart", function (e) {
    touchStartPos = e.changedTouches[0].clientX;
  })

  testim.addEventListener("touchend", function (e) {
    touchEndPos = e.changedTouches[0].clientX;

    touchPosDiff = touchStartPos - touchEndPos;

    console.log(touchPosDiff);
    console.log(touchStartPos);
    console.log(touchEndPos);


    if (touchPosDiff > 0 + ignoreTouch) {
      testimLeftArrow.click();
    } else if (touchPosDiff < 0 - ignoreTouch) {
      testimRightArrow.click();
    } else {
      return;
    }

  })

});

// Bootcamp section
const notif_btn = document.getElementById("notif-button");
notif_btn.addEventListener("click", () => {
  document.location.href = "/bootcamp";
  document.getElementById("notif-button").style.display = "hiddden"

})
setInterval(() => {
  document.getElementById("notif-button").classList.toggle("not-btn-color")
}, 800)

const deadline = new Date("sep 25, 2020 00:00:00").getTime();
function formatter(x) {
  if (x <= 9) return `0${x}`
  else return x
}
//Send data to the external google sheet
var $form = $('form#submit-team'),
  url = 'https://script.google.com/macros/s/AKfycbwUOsf0NvTKxigOO3JueP8tutrQaYcXbpEy6MCC4KdH0ANWYPDB/exec';

(function ($) {
  $(document).ready(function () {
    $("form.submit-team").submit(function (e) {
      e.preventDefault();

      var jsonObject = $(this).serializeObject();
      console.log(jsonObject);
      var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: jsonObject,
        success: function () { location.reload() }
      })
    });
  });
})(jQuery);