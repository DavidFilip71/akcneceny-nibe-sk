//Toast notifikace

const toastTimeout = 5000;
const progressUpdateInterval = 10;
const activeDelay = 10;

function showToast(message, type = "") {
  const toastContainer = document.querySelector(".notices");

  const toast = document.createElement("div");
  toast.classList.add("notification", `is-${type}`);
  toast.setAttribute("role", "alertdialog");

  toast.innerHTML = `
    <button class="delete"></button>
    ${message}
    ${type !== "danger" ? '<progress class="progress is-small" max="100" value="0"></progress>' : ""}
  `;

  toastContainer.appendChild(toast);

  let timer, removeTimer, progressInterval;
  const progressBar = toast.querySelector(".progress");
  let startTime = null;

  // Aktivace animace
  setTimeout(() => {
    toast.classList.add("active");
  }, activeDelay);

  function startTimers(duration) {
    startTime = performance.now();

    if (type !== "danger" && progressBar) {
      progressInterval = setInterval(() => {
        const elapsed = performance.now() - startTime;
        const progress = Math.min((elapsed / duration) * 100, 100);
        progressBar.value = progress;
      }, progressUpdateInterval);

      timer = setTimeout(() => {
        toast.classList.remove("active");

        // Přidání nové třídy pro zmenšení
        removeTimer = setTimeout(() => {
          toast.classList.add("is-closing");

          // Po dokončení animace odstraníme element z DOM
          setTimeout(() => {
            clearInterval(progressInterval);
            toast.remove();
          }, 0); // Čas odpovídá délce animace definované v CSS
        }, 500);
      }, duration);
    }
  }

  startTimers(toastTimeout);

  toast.addEventListener("mouseenter", () => {
    clearTimeout(timer);
    clearTimeout(removeTimer);
    clearInterval(progressInterval);
  });

  toast.addEventListener("mouseleave", () => {
    if (type !== "danger" && progressBar) {
      const elapsed = performance.now() - startTime;
      const remaining = toastTimeout - elapsed;

      startTimers(remaining);
    }
  });

  const closeButton = toast.querySelector(".delete");
  closeButton.addEventListener("click", () => {
    clearTimeout(timer);
    clearTimeout(removeTimer);
    clearInterval(progressInterval);
    toast.classList.remove("active");

    // Přidání nové třídy pro zmenšení
    removeTimer = setTimeout(() => {
      toast.classList.add("is-closing");

      // Po dokončení animace odstraníme element z DOM
      setTimeout(() => {
        clearInterval(progressInterval);
        toast.remove();
      }, 0); // Čas odpovídá délce animace definované v CSS
    }, 500);
  });
}

// Příklad použití
/* showToast("Vaše změny byly uloženy!", "success");
setTimeout(() => showToast("Obyčejná notifikace", ""), 1000);
setTimeout(() => showToast("Došlo k chybě!", "danger"), 2000);
setTimeout(() => showToast("Zkontrolujte nastavení!", "warning"), 3000);
setTimeout(() => showToast("Toto je informační zpráva.", "info"), 4000);
window.location.href = 'admin/hotely/' + data.data.id + '?toast=' + encodeURIComponent('Hotel byl úspěšně uložen.') + '&type=success'; */


// Příklad: http://localhost/service.html?toast=Změny%20byly%20uloženy!&type=success

document.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  if (params.has('toast')) {
    const msg = params.get('toast');
    const type = params.get('type') || 'success';
    showToast(msg, type);

    // Odstranění parametrů z URL
    params.delete('toast');
    params.delete('type');
    const newUrl = window.location.pathname + (params.toString() ? '?' + params.toString() : '');
    window.history.replaceState({}, '', newUrl);
  }
});