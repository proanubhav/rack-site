(() => {
  const onReady = (callback) => {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", callback);
    } else {
      callback();
    }
  };

  onReady(() => {
    const form = document.getElementById("contact-form");
    if (!form) return;

    const endpoint = form.getAttribute("data-endpoint");
    if (!endpoint) return;

    const statusEl = document.getElementById("contact-form-status");
    const submitBtn = form.querySelector('button[type="submit"]');
    const defaultBtnText = submitBtn ? submitBtn.textContent.trim() : "";
    const defaultBtnDataText = submitBtn ? submitBtn.getAttribute("data-text") : "";

    const setStatus = (type, message) => {
      if (!statusEl) return;
      statusEl.classList.remove("d-none", "alert-success", "alert-danger");
      statusEl.classList.add(type === "success" ? "alert-success" : "alert-danger");
      statusEl.textContent = message;
    };

    const resetNiceSelect = () => {
      if (window.jQuery && window.jQuery.fn && window.jQuery.fn.niceSelect) {
        window.jQuery(form).find("select").niceSelect("update");
      }
    };

    form.addEventListener("submit", (event) => {
      event.preventDefault();

      if (typeof form.reportValidity === "function" && !form.reportValidity()) {
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add("disabled");
        submitBtn.textContent = "Sending...";
        if (submitBtn.hasAttribute("data-text")) {
          submitBtn.setAttribute("data-text", "Sending...");
        }
      }

      if (statusEl) {
        statusEl.classList.add("d-none");
        statusEl.textContent = "";
      }

      const formData = new FormData(form);
      formData.set("submitted_at", new Date().toISOString());

      fetch(endpoint, {
        method: "POST",
        body: formData,
        mode: "no-cors",
      })
        .then(() => {
          setStatus("success", "Thanks! Your message has been sent.");
          form.reset();
          resetNiceSelect();
        })
        .catch(() => {
          setStatus("error", "Failed to send your message. Please try again.");
        })
        .finally(() => {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.classList.remove("disabled");
            if (defaultBtnText) {
              submitBtn.textContent = defaultBtnText;
            }
            if (submitBtn.hasAttribute("data-text")) {
              submitBtn.setAttribute("data-text", defaultBtnDataText || defaultBtnText || "Submit");
            }
          }
        });
    });
  });
})();
