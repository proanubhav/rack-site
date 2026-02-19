(() => {
  const onReady = (callback) => {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", callback);
    } else {
      callback();
    }
  };

  onReady(() => {
    const forms = Array.from(document.querySelectorAll("form[data-contact-form]"));
    const legacyForm = document.getElementById("contact-form");
    if (legacyForm && !forms.includes(legacyForm)) {
      forms.push(legacyForm);
    }

    if (!forms.length) return;

    forms.forEach((form) => {
      const endpoint = form.getAttribute("data-endpoint");
      if (!endpoint) return;

      const statusEl = form.querySelector("[data-contact-form-status], #contact-form-status");
      const submitBtn = form.querySelector('button[type="submit"], .submit-btn');
      const defaultBtnText = submitBtn ? submitBtn.textContent.trim() : "";
      const defaultBtnHtml = submitBtn ? submitBtn.innerHTML : "";
      const defaultBtnDataText = submitBtn ? submitBtn.getAttribute("data-text") : "";
      const formSource =
        form.getAttribute("data-source") ||
        form.getAttribute("id") ||
        window.location.pathname.replace(/^\/+/, "") ||
        "unknown";

      const setStatus = (type, message) => {
        if (!statusEl) return;
        statusEl.classList.remove("d-none", "alert-success", "alert-danger");
        statusEl.classList.add(type === "success" ? "alert-success" : "alert-danger");
        statusEl.textContent = message;
      };

      const setSubmitDisabled = (isDisabled) => {
        if (!submitBtn) return;
        if ("disabled" in submitBtn) {
          submitBtn.disabled = isDisabled;
        }
        submitBtn.classList.toggle("disabled", isDisabled);
        if (isDisabled) {
          submitBtn.setAttribute("aria-disabled", "true");
        } else {
          submitBtn.removeAttribute("aria-disabled");
        }
      };

      if (submitBtn && submitBtn.tagName.toLowerCase() === "a") {
        submitBtn.addEventListener("click", (event) => {
          event.preventDefault();
          if (submitBtn.classList.contains("disabled")) return;
          if (typeof form.requestSubmit === "function") {
            form.requestSubmit();
          } else {
            form.dispatchEvent(new Event("submit", { bubbles: true, cancelable: true }));
          }
        });
      }

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
          setSubmitDisabled(true);
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
        if (!formData.get("source")) {
          formData.set("source", formSource);
        }
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
              setSubmitDisabled(false);
              if (defaultBtnHtml) {
                submitBtn.innerHTML = defaultBtnHtml;
              } else if (defaultBtnText) {
                submitBtn.textContent = defaultBtnText;
              }
              if (submitBtn.hasAttribute("data-text")) {
                submitBtn.setAttribute("data-text", defaultBtnDataText || defaultBtnText || "Submit");
              }
            }
          });
      });
    });
  });
})();
