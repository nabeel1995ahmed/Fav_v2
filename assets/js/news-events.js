(() => {
  const gallery = document.getElementById("ne-masonry-gallery");
  if (!gallery) return;

  const albumCards = Array.from(document.querySelectorAll(".ne-album-card"));
  const filterBtns = Array.from(document.querySelectorAll(".ne-filter-btn"));
  const subGroups = Array.from(document.querySelectorAll(".ne-subfilters"));
  const subBtns = Array.from(document.querySelectorAll(".ne-subfilter-btn"));
  const heading = document.getElementById("ne-gallery-heading");
  const countEl = document.getElementById("ne-gallery-count");
  const items = Array.from(gallery.querySelectorAll(".ne-masonry-item"));
  const lightbox = document.getElementById("ne-lightbox");
  const lightboxImage = lightbox?.querySelector(".ne-lightbox-image");
  const lightboxVideo = lightbox?.querySelector(".ne-lightbox-video");
  const lightboxTitle = lightbox?.querySelector(".ne-lightbox-title");
  const lightboxCounter = lightbox?.querySelector(".ne-lightbox-counter");
  const prevBtn = lightbox?.querySelector(".ne-lightbox-prev");
  const nextBtn = lightbox?.querySelector(".ne-lightbox-next");

  let activeCategory = "all";
  let activeEvent = "all";
  let visibleItems = [];
  let currentIndex = 0;

  const setActiveCategoryButtons = (category) => {
    albumCards.forEach((card) => {
      const isActive = category !== "all" && card.dataset.album === category;
      card.classList.toggle("is-active", isActive);
      card.setAttribute("aria-pressed", isActive ? "true" : "false");
    });

    filterBtns.forEach((btn) => {
      const isActive = btn.dataset.category === category;
      btn.classList.toggle("is-active", isActive);
    });
  };

  const setActiveSubButtons = (category, event) => {
    subGroups.forEach((group) => {
      const isParent = group.dataset.parent === category;
      group.hidden = !isParent;
      if (!isParent) return;

      group.querySelectorAll(".ne-subfilter-btn").forEach((btn) => {
        const isActive = btn.dataset.event === event;
        btn.classList.toggle("is-active", isActive);
      });
    });
  };

  const updateHeading = (category, event) => {
    if (!heading) return;

    if (category === "all") {
      heading.textContent = "All Events";
      return;
    }

    if (event !== "all") {
      const activeSub = subBtns.find(
        (btn) => btn.dataset.category === category && btn.dataset.event === event
      );
      if (activeSub) {
        const clone = activeSub.cloneNode(true);
        clone.querySelector('.ne-filter-count')?.remove();
        const subTitle = clone.textContent.trim();
        if (subTitle) {
          heading.textContent = subTitle;
          return;
        }
      }
    }

    const match = albumCards.find((card) => card.dataset.album === category);
    const title = match?.querySelector("h3")?.textContent?.trim();
    heading.textContent = title || "Gallery";
  };

  const updateCount = (count) => {
    if (!countEl) return;
    countEl.textContent = `Showing ${count} media item${count === 1 ? "" : "s"}`;
  };

  const revealItems = (matchedItems) => {
    matchedItems.forEach((item, index) => {
      item.classList.remove("is-visible");
      item.classList.add("is-revealing");
      item.style.setProperty("--ne-delay", `${Math.min(index, 11) * 35}ms`);
      requestAnimationFrame(() => {
        item.classList.remove("is-revealing");
        item.classList.add("is-visible");
      });
    });
  };

  const applyFilter = (category, event = "all", { scroll = false } = {}) => {
    activeCategory = category;
    activeEvent = event;

    setActiveCategoryButtons(category);
    setActiveSubButtons(category, event);
    updateHeading(category, event);

    const matched = [];
    items.forEach((item) => {
      const categoryMatch = category === "all" || item.dataset.album === category;
      const eventMatch = event === "all" || item.dataset.event === event;
      const match = categoryMatch && eventMatch;
      item.classList.toggle("is-hidden", !match);
      if (match) matched.push(item);
    });

    visibleItems = matched;
    updateCount(matched.length);
    revealItems(matched);

    if (scroll) {
      document.getElementById("events-gallery")?.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  };

  const stopVideo = () => {
    if (!lightboxVideo) return;
    lightboxVideo.pause();
    lightboxVideo.removeAttribute("src");
    lightboxVideo.load();
  };

  const showLightboxItem = (index) => {
    if (!lightbox || !visibleItems.length) return;

    currentIndex = (index + visibleItems.length) % visibleItems.length;
    const item = visibleItems[currentIndex];
    const type = item.dataset.type;
    const src = item.dataset.src;
    const title = item.dataset.title || "";

    if (lightboxTitle) lightboxTitle.textContent = title;
    if (lightboxCounter) {
      lightboxCounter.textContent = `${currentIndex + 1} / ${visibleItems.length}`;
    }

    if (type === "video") {
      lightboxImage?.classList.add("is-hidden");
      lightboxVideo?.classList.remove("is-hidden");
      if (lightboxVideo) {
        lightboxVideo.src = src;
        lightboxVideo.play().catch(() => {});
      }
    } else {
      stopVideo();
      lightboxVideo?.classList.add("is-hidden");
      lightboxImage?.classList.remove("is-hidden");
      if (lightboxImage) {
        lightboxImage.src = src;
        lightboxImage.alt = title;
      }
    }
  };

  const openLightbox = (item) => {
    if (!lightbox) return;
    visibleItems = items.filter((el) => !el.classList.contains("is-hidden"));
    const index = visibleItems.indexOf(item);
    if (index < 0) return;

    lightbox.hidden = false;
    lightbox.setAttribute("aria-hidden", "false");
    document.body.classList.add("ne-lightbox-open");
    showLightboxItem(index);
  };

  const closeLightbox = () => {
    if (!lightbox) return;
    stopVideo();
    lightbox.hidden = true;
    lightbox.setAttribute("aria-hidden", "true");
    document.body.classList.remove("ne-lightbox-open");
  };

  albumCards.forEach((card) => {
    card.addEventListener("click", () => {
      applyFilter(card.dataset.album, "all", { scroll: true });
    });
  });

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      applyFilter(btn.dataset.category || "all", "all");
    });
  });

  subBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      applyFilter(btn.dataset.category || "all", btn.dataset.event || "all");
    });
  });

  items.forEach((item) => {
    item.addEventListener("click", () => openLightbox(item));
  });

  lightbox?.querySelectorAll("[data-lightbox-close]").forEach((el) => {
    el.addEventListener("click", closeLightbox);
  });

  prevBtn?.addEventListener("click", () => showLightboxItem(currentIndex - 1));
  nextBtn?.addEventListener("click", () => showLightboxItem(currentIndex + 1));

  document.addEventListener("keydown", (event) => {
    if (lightbox?.hidden) return;
    if (event.key === "Escape") closeLightbox();
    if (event.key === "ArrowLeft") showLightboxItem(currentIndex - 1);
    if (event.key === "ArrowRight") showLightboxItem(currentIndex + 1);
  });

  applyFilter(activeCategory, activeEvent);
})();

