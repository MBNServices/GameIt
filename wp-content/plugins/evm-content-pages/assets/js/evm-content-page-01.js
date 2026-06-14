(function () {
  "use strict";

  var sections = document.querySelectorAll(".evm-content-page-01");

  if (!sections.length) {
    return;
  }

  var prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  sections.forEach(function (section) {
    var revealItems = section.querySelectorAll(".evm-reveal");
    var counters = section.querySelectorAll("[data-count-value]");

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      revealItems.forEach(function (item) {
        item.classList.add("is-visible");
      });
      return;
    }

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

    if (!counters.length) {
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

    var duration = 1100;
    var start = performance.now();
    var hasDecimal = String(element.getAttribute("data-count-value")).indexOf(".") !== -1;

    function tick(now) {
      var progress = Math.min((now - start) / duration, 1);
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
})();
