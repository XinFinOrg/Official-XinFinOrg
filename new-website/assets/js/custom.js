// DOMContentLoaded for scrollup down nav
document.addEventListener("DOMContentLoaded", function () {
  el_autohide = document.querySelector(".autohide");

  // add padding-top to bady (if necessary)
  //navbar_height = document.querySelector('.navbar').offsetHeight;
  //document.body.style.paddingTop = navbar_height + 'px';

  if (el_autohide) {
    var last_scroll_top = 0;
    window.addEventListener("scroll", function () {
      let scroll_top = window.scrollY;
      if (scroll_top < last_scroll_top) {
        el_autohide.classList.remove("scrolled-down");
        el_autohide.classList.add("scrolled-up");
      } else {
        el_autohide.classList.remove("scrolled-up");
        el_autohide.classList.add("scrolled-down");
      }
      last_scroll_top = scroll_top;
    });
    // window.addEventListener
  }
  // if
});
// DOMContentLoaded end for scrollup down nav

(function ($) {
  "use strict";
  $(document).on("ready", async function () {
   
   //fetch data via API
    const numberToReadable = (labelValue) => {
      const num =
        Math.abs(Number(labelValue)) >= 1.0e9
          ? parseFloat(Math.abs(labelValue) / 1.0e9, 2).toFixed(2)
          : // Six Zeroes for Millions
          Math.abs(Number(labelValue)) >= 1.0e6
          ? parseFloat(Math.abs(labelValue) / 1.0e6, 2).toFixed(2)
          : // Three Zeroes for Thousands
            Math.abs(Number(labelValue)).toLocaleString("en-US");
      const text =
        Math.abs(Number(labelValue)) >= 1.0e9
          ? "B"
          : // Six Zeroes for Millions
          Math.abs(Number(labelValue)) >= 1.0e6
          ? "M"
          : // Three Zeroes for Thousands
            "";
      return { num, text };
    };

    const data = await fetch(
      "https://observer-transactions.xdc.org/getTotalTransactions"
    );
    const jsonData = await data.json();
    const readableNumber = numberToReadable(jsonData.responseData);
    $("#transactionCount").text(readableNumber.num);
    $("#transactionText").text(readableNumber.text);

    const nodeData = await fetch(
      "https://master.xinfin.network/api/candidates/masternodes"
    );
    const nodeDataJson = await nodeData.json();
    const masternodes = nodeDataJson.activeCandidates;
    const totalnodes =
      nodeDataJson.totalResigned + nodeDataJson.totalProposed + masternodes;
    $("#masternodes").text(masternodes);
    $("#totalnodes").text(totalnodes);

    const contractData = await fetch(
      "https://explorer.xinfin.network/api/setting"
    );
    const contractDataJson = await contractData.json();
    const readableContract = numberToReadable(
      contractDataJson.stats.totalToken
    );
    $("#contractNumber").text(readableContract.num);
    $("#contractNumberText").text(readableContract.text);
    //end fetch data via API
   
   
    // SCROLL TO TOP
    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();

    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";

    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };

    updateProgress();
    $(window).scroll(updateProgress);

    var offset = 50;
    var duration = 550;

    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(".progress-wrap").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
      }
    });

    jQuery(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });

    // MOBILE MENU
    $("#hamburger").on("click", function () {
      $(".mobile-nav").addClass("show");
      $(".overlay").addClass("active");
    });

    $(".close-nav").on("click", function () {
      $(".mobile-nav").removeClass("show");
      $(".overlay").removeClass("active");
    });

    $(".overlay").on("click", function () {
      $(".mobile-nav").removeClass("show");
      $(".overlay").removeClass("active");
    });

    $("#mobile-menu").metisMenu();

    /* Sticky Header */
    var windows = $(window);
    $(window).on("scroll", function () {
      var scrollPos = $(this).scrollTop();
      if (scrollPos > 50) {
        $(".sticky-header").addClass("is-sticky");
      } else {
        $(".sticky-header").removeClass("is-sticky");
      }
    });
    // PROGRESS BAR
    jQuery(".skillbar").each(function () {
      jQuery(this)
        .find(".skillbar-bar")
        .animate(
          {
            width: jQuery(this).attr("data-percent"),
          },
          6000
        );
    });

    // COUNTER UP
    $(".counter").countUp();

    // NEWS BAR
    $(".closeNews").click(function () {
      $("div.news-bar").slideUp();
    });

    // THEME SWITCHER
    var toggle = document.getElementById("theme-toggle");
    var storedTheme =
      localStorage.getItem("theme") ||
      (window.matchMedia("(prefers-color-scheme: darkTheme)").matches
        ? "darkTheme"
        : "lightTheme");
    const htmlTag = document.getElementsByTagName("body")[0];
    if (storedTheme) htmlTag.setAttribute("class", storedTheme);
    toggle.onclick = function () {
      var currentTheme = htmlTag.getAttribute("class", targetTheme);
      var targetTheme = "lightTheme";
      if (currentTheme === "lightTheme") {
        targetTheme = "darkTheme";
      }
      htmlTag.setAttribute("class", targetTheme);
      localStorage.setItem("theme", targetTheme);
    };

    var toggleMob = document.getElementById("theme-toggle-mob");
    var storedThemeMob =
      localStorage.getItem("theme") ||
      (window.matchMedia("(prefers-color-scheme: darkTheme)").matches
        ? "darkTheme"
        : "lightTheme");
    const htmlTagMob = document.getElementsByTagName("body")[0];
    if (storedThemeMob) htmlTagMob.setAttribute("class", storedThemeMob);
    toggleMob.onclick = function () {
      var currentTheme = htmlTagMob.getAttribute("class", targetTheme);
      var targetTheme = "lightTheme";
      if (currentTheme === "lightTheme") {
        targetTheme = "darkTheme";
      }
      htmlTagMob.setAttribute("class", targetTheme);
      localStorage.setItem("theme", targetTheme);
    };
  }); // end document ready function
})(jQuery); // End jQuery

// Particle Background
window.addEventListener("load", windowLoadHandler, false);

function windowLoadHandler() {
  if (document.querySelectorAll("canvas")) {
    [].forEach.call(document.querySelectorAll("canvas"), (canvas) => {
      canvasApp(canvas);
    });
  }
}

function canvasApp(canvas) {
  var theCanvas = canvas;
  var context = theCanvas.getContext("2d");

  var displayWidth;
  var displayHeight;
  var timer;
  var wait;
  var count;
  var numToAddEachFrame;
  var particleList;
  var recycleBin;
  var particleAlpha;
  var fLen;
  var m;
  var projCenterX;
  var projCenterY;
  var zMax;
  var turnAngle;
  var turnSpeed;
  var sphereRad, sphereCenterX, sphereCenterY, sphereCenterZ;
  var particleRad;
  var zeroAlphaDepth;
  var randAccelX, randAccelY, randAccelZ;
  var gravity;
  var rgbString;

  // We are defining a lot of variables used in the screen update functions globally so that they don't have to be redefined every frame
  var p;
  var outsideTest;
  var nextParticle;
  var sinAngle;
  var cosAngle;
  var rotX, rotZ;
  var depthAlphaFactor;
  var i;
  var theta, phi;
  var x0, y0, z0;

  init();

  function init() {
    wait = 1;
    count = wait - 1;
    numToAddEachFrame = 4;

    // Particle color
    let rgb = theCanvas.dataset.rgb;

    rgbString = `rgba(${rgb}, `; // Partial string for color which will be completed by appending alpha value
    particleAlpha = 1; // Maximum alpha

    displayWidth = theCanvas.width;
    displayHeight = theCanvas.height;

    fLen = 256; // Represents the distance from the viewer to z=0 depth. // e.g 320

    // Projection center coordinates sets location of origin
    projCenterX = displayWidth / 2;
    projCenterY = displayHeight / 2;

    // We will not draw coordinates if they have too large of a z-coordinate (which means they are very close to the observer)
    zMax = fLen - 2;

    particleList = {};
    recycleBin = {};

    // Random acceleration factors - causes some random motion
    randAccelX = 0.1;
    randAccelY = 0.1;
    randAccelZ = 0.1;

    gravity = 0; // Try changing to a positive number (not too large, for example 0.3), or negative for floating upwards

    particleRad = 2.5;
    sphereRad = 256;
    sphereCenterX = 0;
    sphereCenterY = 0;
    sphereCenterZ = -3 - sphereRad;

    // Alpha values will lessen as particles move further back, causing depth-based darkening:
    zeroAlphaDepth = -750;

    turnSpeed = (5 * Math.PI) / 1600; // The sphere will rotate at this speed (one complete rotation every 1600 frames).
    //turnSpeed = 2*Math.PI/1600; // The sphere will rotate at this speed (one complete rotation every 1600 frames).
    turnAngle = 0; // Initial angle

    timer = setInterval(onTimer, 1000 / 24);
  }

  function onTimer() {
    // If enough time has elapsed, we will add new particles.
    count++;
    if (count >= wait) {
      count = 0;
      for (i = 0; i < numToAddEachFrame; i++) {
        theta = Math.random() * 2 * Math.PI;
        phi = Math.acos(Math.random() * 2 - 1);
        x0 = sphereRad * Math.sin(phi) * Math.cos(theta);
        y0 = sphereRad * Math.sin(phi) * Math.sin(theta);
        z0 = sphereRad * Math.cos(phi);

        // We use the addParticle function to add a new particle. The parameters set the position and velocity components.
        // Note that the velocity parameters will cause the particle to initially fly outwards away from the sphere center (after
        // it becomes unstuck).
        var p = addParticle(
          x0,
          sphereCenterY + y0,
          sphereCenterZ + z0,
          0.002 * x0,
          0.002 * y0,
          0.002 * z0
        );

        // We set some "envelope" parameters which will control the evolving alpha of the particles
        p.attack = 50;
        p.hold = 50;
        p.decay = 160;
        p.initValue = 0;
        p.holdValue = particleAlpha;
        p.lastValue = 0;

        // The particle will be stuck in one place until this time has elapsed
        p.stuckTime = 80 + Math.random() * 20;

        p.accelX = 0;
        p.accelY = gravity;
        p.accelZ = 0;
      }
    }

    // Update viewing angle
    turnAngle = (turnAngle + turnSpeed) % (2 * Math.PI);
    sinAngle = Math.sin(turnAngle);
    cosAngle = Math.cos(turnAngle);

    // Background fill
    let bg = theCanvas.dataset.bg;

    context.fillStyle = bg;
    context.fillRect(0, 0, displayWidth, displayHeight);
    // context.clearRect(0, 0, displayWidth, displayWidth);

    // Update and draw particles
    p = particleList.first;
    while (p != null) {
      // Before list is altered record next particle
      nextParticle = p.next;

      // Update age
      p.age++;

      // If the particle is past its "stuck" time, it will begin to move
      if (p.age > p.stuckTime) {
        p.velX += p.accelX + randAccelX * (Math.random() * 2 - 1);
        p.velY += p.accelY + randAccelY * (Math.random() * 2 - 1);
        p.velZ += p.accelZ + randAccelZ * (Math.random() * 2 - 1);

        p.x += p.velX;
        p.y += p.velY;
        p.z += p.velZ;
      }

      /*
            We are doing two things here to calculate display coordinates.
            The whole display is being rotated around a vertical axis, so we first calculate rotated coordinates for
            x and z (but the y coordinate will not change).
            Then, we take the new coordinates (rotX, y, rotZ), and project these onto the 2D view plane.
            */
      rotX = cosAngle * p.x + sinAngle * (p.z - sphereCenterZ);
      rotZ = -sinAngle * p.x + cosAngle * (p.z - sphereCenterZ) + sphereCenterZ;
      m = fLen / (fLen - rotZ);
      p.projX = rotX * m + projCenterX;
      p.projY = p.y * m + projCenterY;

      // Update alpha according to envelope parameters
      if (p.age < p.attack + p.hold + p.decay) {
        if (p.age < p.attack) {
          p.alpha =
            ((p.holdValue - p.initValue) / p.attack) * p.age + p.initValue;
        } else if (p.age < p.attack + p.hold) {
          p.alpha = p.holdValue;
        } else if (p.age < p.attack + p.hold + p.decay) {
          p.alpha =
            ((p.lastValue - p.holdValue) / p.decay) *
              (p.age - p.attack - p.hold) +
            p.holdValue;
        }
      } else {
        p.dead = true;
      }

      // See if the particle is still within the viewable range
      if (
        p.projX > displayWidth ||
        p.projX < 0 ||
        p.projY < 0 ||
        p.projY > displayHeight ||
        rotZ > zMax
      ) {
        outsideTest = true;
      } else {
        outsideTest = false;
      }

      if (outsideTest || p.dead) {
        recycle(p);
      } else {
        // Depth-dependent darkening
        depthAlphaFactor = 1 - rotZ / zeroAlphaDepth;
        depthAlphaFactor =
          depthAlphaFactor > 1
            ? 1
            : depthAlphaFactor < 0
            ? 0
            : depthAlphaFactor;
        context.fillStyle = rgbString + depthAlphaFactor * p.alpha + ")";

        // Draw
        context.beginPath();
        context.arc(p.projX, p.projY, m * particleRad, 0, 2 * Math.PI, false);
        context.closePath();
        context.fill();
      }

      p = nextParticle;
    }
  }

  function addParticle(x0, y0, z0, vx0, vy0, vz0) {
    var newParticle;

    // Check recycle bin for available drop:
    if (recycleBin.first != null) {
      newParticle = recycleBin.first;
      // Remove from bin
      if (newParticle.next != null) {
        recycleBin.first = newParticle.next;
        newParticle.next.prev = null;
      } else {
        recycleBin.first = null;
      }
    } else {
      // If the recycle bin is empty, create a new particle (a new ampty object):
      newParticle = {};
    }

    //add to beginning of particle list
    if (particleList.first == null) {
      particleList.first = newParticle;
      newParticle.prev = null;
      newParticle.next = null;
    } else {
      newParticle.next = particleList.first;
      particleList.first.prev = newParticle;
      particleList.first = newParticle;
      newParticle.prev = null;
    }

    // Initialize
    newParticle.x = x0;
    newParticle.y = y0;
    newParticle.z = z0;
    newParticle.velX = vx0;
    newParticle.velY = vy0;
    newParticle.velZ = vz0;
    newParticle.age = 0;
    newParticle.dead = false;
    if (Math.random() < 0.5) {
      newParticle.right = true;
    } else {
      newParticle.right = false;
    }
    return newParticle;
  }

  function recycle(p) {
    // Remove from particleList
    if (particleList.first == p) {
      if (p.next != null) {
        p.next.prev = null;
        particleList.first = p.next;
      } else {
        particleList.first = null;
      }
    } else {
      if (p.next == null) {
        p.prev.next = null;
      } else {
        p.prev.next = p.next;
        p.next.prev = p.prev;
      }
    }
    // Add to recycle bin
    if (recycleBin.first == null) {
      recycleBin.first = p;
      p.prev = null;
      p.next = null;
    } else {
      p.next = recycleBin.first;
      recycleBin.first.prev = p;
      recycleBin.first = p;
      p.prev = null;
    }
  }
}
