(function () {
  "use strict";

  var sections = document.querySelectorAll(".evm-content-page-01");

  if (!sections.length) {
    return;
  }

  document.documentElement.classList.add("evm-content-page-01-active-root");
  document.documentElement.style.overflowX = "hidden";

  var prefersReducedMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");
  var prefersReducedMotion = prefersReducedMotionQuery.matches;

  fitFullBleedSections();
  window.addEventListener("resize", debounce(fitFullBleedSections, 120));

  sections.forEach(function (section) {
    var revealItems = section.querySelectorAll(".evm-reveal");
    var counters = section.querySelectorAll("[data-count-value]");

    setupGameItHeaderMenu(section);
    setupHeroCountdown(section);
    setupReviewSlider(section);
    setupReviewToggles(section);

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      revealItems.forEach(function (item) {
        item.classList.add("is-visible");
      });
    } else {
      var revealObserver = new IntersectionObserver(
        function (entries, observer) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) {
              return;
            }

            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          });
        },
        {
          threshold: 0.16,
          rootMargin: "0px 0px -8% 0px"
        }
      );

      revealItems.forEach(function (item) {
        revealObserver.observe(item);
      });
    }

    if (!counters.length) {
      return;
    }

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      counters.forEach(function (counter) {
        animateCounter(counter);
      });
      return;
    }

    var counterObserver = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) {
            return;
          }

          animateCounter(entry.target);
          observer.unobserve(entry.target);
        });
      },
      {
        threshold: 0.45
      }
    );

    counters.forEach(function (counter) {
      counterObserver.observe(counter);
    });
  });

  function fitFullBleedSections() {
    sections.forEach(function (section) {
      section.style.width = "";
      section.style.maxWidth = "";
      section.style.marginLeft = "";
      section.style.marginRight = "";
      section.style.marginInlineStart = "";
      section.style.marginInlineEnd = "";
    });

    document.documentElement.style.overflowX = "hidden";
    document.body.style.overflowX = "hidden";
  }

  function debounce(callback, wait) {
    var timeoutId;

    return function () {
      window.clearTimeout(timeoutId);
      timeoutId = window.setTimeout(callback, wait);
    };
  }

  function animateCounter(element) {
    if (element.dataset.countAnimated === "true") {
      return;
    }

    var finalDisplay = element.getAttribute("data-count-display") || element.textContent;
    var rawValue = parseFloat(element.getAttribute("data-count-value") || "");

    if (Number.isNaN(rawValue)) {
      element.dataset.countAnimated = "true";
      return;
    }

    var duration = prefersReducedMotion ? 0 : 1100;
    var start = performance.now();
    var hasDecimal = String(element.getAttribute("data-count-value")).indexOf(".") !== -1;

    function tick(now) {
      var progress = duration === 0 ? 1 : Math.min((now - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = rawValue * eased;

      if (hasDecimal) {
        element.textContent = current.toFixed(1);
      } else {
        element.textContent = Math.round(current).toLocaleString("he-IL");
      }

      if (progress < 1) {
        window.requestAnimationFrame(tick);
        return;
      }

      element.textContent = finalDisplay;
      element.dataset.countAnimated = "true";
    }

    window.requestAnimationFrame(tick);
  }

  function setupHeroCountdown(section) {
    var timer = section.querySelector("[data-evm-countdown]");

    if (!timer || timer.dataset.countdownInitialized === "true") {
      return;
    }

    const initialSeconds = 10;
    const formatCountdown = (seconds) => `00:${String(seconds).padStart(2, "0")}`;
    var endTime = Date.now() + initialSeconds * 1000;
    var intervalId = null;

    timer.dataset.countdownInitialized = "true";
    timer.textContent = formatCountdown(initialSeconds);

    function stopCountdown() {
      if (!intervalId) {
        return;
      }

      window.clearInterval(intervalId);
      intervalId = null;
    }

    function updateCountdown() {
      var remainingSeconds = Math.max(0, Math.ceil((endTime - Date.now()) / 1000));

      timer.textContent = formatCountdown(remainingSeconds);

      if (remainingSeconds > 0) {
        return;
      }

      stopCountdown();
    }

    intervalId = window.setInterval(updateCountdown, 1000);
    updateCountdown();
  }

  function setupGameItHeaderMenu(section) {
    var header = section.querySelector(".evm-gameit-header");
    var toggle = header ? header.querySelector(".evm-gameit-header__menu-toggle") : null;
    var panel = header ? header.querySelector(".evm-gameit-header__mobile-panel") : null;

    if (!header || !toggle || !panel || header.dataset.menuInitialized === "true") {
      return;
    }

    var links = panel.querySelectorAll("a");

    function setOpenState(isOpen) {
      toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      panel.hidden = !isOpen;
      panel.classList.toggle("is-open", isOpen);
      header.classList.toggle("is-menu-open", isOpen);
    }

    function closeMenu() {
      setOpenState(false);
    }

    header.dataset.menuInitialized = "true";
    setOpenState(false);

    toggle.addEventListener("click", function () {
      setOpenState(toggle.getAttribute("aria-expanded") !== "true");
    });

    links.forEach(function (link) {
      link.addEventListener("click", function () {
        closeMenu();
      });
    });

    document.addEventListener("click", function (event) {
      if (!header.classList.contains("is-menu-open")) {
        return;
      }

      if (header.contains(event.target)) {
        return;
      }

      closeMenu();
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape" && header.classList.contains("is-menu-open")) {
        closeMenu();
        toggle.focus();
      }
    });

    window.addEventListener(
      "resize",
      debounce(function () {
        if (window.innerWidth > 700) {
          closeMenu();
        }
      }, 120)
    );
  }

  function setupReviewToggles(section) {
    var toggles = section.querySelectorAll(".evm-review-card__toggle");

    toggles.forEach(function (toggle) {
      toggle.addEventListener("click", function () {
        var card = toggle.closest(".evm-review-card");
        var text = card ? card.querySelector(".evm-review-card__text") : null;

        if (!text) {
          return;
        }

        var expanded = text.dataset.expanded === "true";
        var nextExpanded = !expanded;

        text.textContent = nextExpanded ? text.dataset.expandedText : text.dataset.collapsedText;
        text.dataset.expanded = nextExpanded ? "true" : "false";
        toggle.setAttribute("aria-expanded", nextExpanded ? "true" : "false");
        toggle.textContent = nextExpanded ? "הצג פחות" : "קראו עוד";
      });
    });
  }

  function setupReviewSlider(section) {
    var slider = section.querySelector(".evm-reviews__slider");

    if (!slider) {
      return;
    }

    var track = slider.querySelector(".evm-reviews__track");
    var cards = Array.prototype.slice.call(slider.querySelectorAll(".evm-review-card"));
    var nextButton = slider.querySelector(".evm-reviews__arrow--next");
    var prevButton = slider.querySelector(".evm-reviews__arrow--prev");
    var dotsRoot = slider.querySelector(".evm-reviews__dots");
    var autoplayDelay = 7000;
    var currentIndex = 0;
    var autoplayId = null;
    var pointerStartX = null;
    var pointerDeltaX = 0;

    if (!track || !cards.length) {
      return;
    }

    var dots = cards.map(function (_, index) {
      var dot = document.createElement("button");
      dot.type = "button";
      dot.className = "evm-reviews__dot";
      dot.setAttribute("aria-label", "מעבר לביקורת " + (index + 1));
      dot.setAttribute("aria-pressed", index === 0 ? "true" : "false");
      dot.addEventListener("click", function () {
        goTo(index, true);
      });
      dotsRoot.appendChild(dot);
      return dot;
    });

    function cardsPerView() {
      if (window.innerWidth <= 700) {
        return 1;
      }

      if (window.innerWidth <= 1024) {
        return 2;
      }

      return 3;
    }

    function maxIndex() {
      return Math.max(0, cards.length - cardsPerView());
    }

    function updateUi() {
      var card = cards[Math.min(currentIndex, cards.length - 1)];
      var left = card ? card.offsetLeft : 0;

      track.scrollTo({
        left: left,
        behavior: prefersReducedMotion ? "auto" : "smooth"
      });

      cards.forEach(function (item, index) {
        item.classList.toggle("is-active", index === Math.min(currentIndex + Math.floor(cardsPerView() / 2), cards.length - 1));
      });

      dots.forEach(function (dot, index) {
        var active = index === currentIndex;
        dot.classList.toggle("is-active", active);
        dot.setAttribute("aria-pressed", active ? "true" : "false");
        dot.setAttribute("aria-current", active ? "true" : "false");
      });

      if (prevButton) {
        prevButton.disabled = currentIndex === 0;
      }

      if (nextButton) {
        nextButton.disabled = currentIndex >= maxIndex();
      }
    }

    function goTo(index, pauseAutoplay) {
      currentIndex = Math.max(0, Math.min(index, maxIndex()));
      updateUi();

      if (pauseAutoplay) {
        stopAutoplay();
      }
    }

    function goNext(pauseAutoplay) {
      if (currentIndex >= maxIndex()) {
        goTo(0, pauseAutoplay);
        return;
      }

      goTo(currentIndex + 1, pauseAutoplay);
    }

    function goPrev() {
      if (currentIndex <= 0) {
        goTo(maxIndex(), true);
        return;
      }

      goTo(currentIndex - 1, true);
    }

    function stopAutoplay() {
      if (autoplayId) {
        window.clearInterval(autoplayId);
        autoplayId = null;
      }
    }

    function startAutoplay() {
      stopAutoplay();

      if (prefersReducedMotion || cards.length <= cardsPerView()) {
        return;
      }

      autoplayId = window.setInterval(function () {
        if (document.hidden) {
          return;
        }

        goNext(false);
      }, autoplayDelay);
    }

    if (nextButton) {
      nextButton.addEventListener("click", function () {
        goNext(true);
      });
    }

    if (prevButton) {
      prevButton.addEventListener("click", function () {
        goPrev();
      });
    }

    track.addEventListener("keydown", function (event) {
      if (event.key === "ArrowLeft") {
        event.preventDefault();
        goNext(true);
      }

      if (event.key === "ArrowRight") {
        event.preventDefault();
        goPrev();
      }
    });

    slider.addEventListener("mouseenter", stopAutoplay);
    slider.addEventListener("mouseleave", startAutoplay);
    slider.addEventListener("focusin", stopAutoplay);
    slider.addEventListener("focusout", startAutoplay);

    document.addEventListener("visibilitychange", function () {
      if (document.hidden) {
        stopAutoplay();
      } else {
        startAutoplay();
      }
    });

    track.addEventListener("pointerdown", function (event) {
      pointerStartX = event.clientX;
      pointerDeltaX = 0;
    });

    track.addEventListener("pointermove", function (event) {
      if (pointerStartX === null) {
        return;
      }

      pointerDeltaX = event.clientX - pointerStartX;
    });

    track.addEventListener("pointerup", function () {
      if (pointerStartX === null) {
        return;
      }

      if (Math.abs(pointerDeltaX) > 40) {
        if (pointerDeltaX < 0) {
          goNext(true);
        } else {
          goPrev();
        }
      }

      pointerStartX = null;
      pointerDeltaX = 0;
    });

    track.addEventListener("pointercancel", function () {
      pointerStartX = null;
      pointerDeltaX = 0;
    });

    window.addEventListener("resize", debounce(function () {
      currentIndex = Math.min(currentIndex, maxIndex());
      updateUi();
      startAutoplay();
    }, 150));

    if (prefersReducedMotionQuery.addEventListener) {
      prefersReducedMotionQuery.addEventListener("change", function (event) {
        prefersReducedMotion = event.matches;
        updateUi();
        startAutoplay();
      });
    }

    updateUi();
    startAutoplay();
  }
})();
