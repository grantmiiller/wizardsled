
function removeModal() {
  const modal = document.getElementById("successModal");
  if (modal) {
    modal.parentElement.removeChild(modal);
    window.removeEventListener("click", removeModal);
  }
}

function createModal() {
  const docFrag = document.createDocumentFragment();
  const outerDiv = document.createElement('div');
  const innerDiv = document.createElement('div');
  const innerText = document.createElement('span');
  const closeText = document.createElement('span');

  outerDiv.id = "successModal";
  outerDiv.className = "outer-modal";

  innerDiv.className = "inner-modal";

  innerText.className = "inner-modal-text";
  innerText.textContent = "Thank you for your purchase!";

  closeText.className = "close-modal-text";
  closeText.textContent = "(Click anywhere to close)";

  innerDiv.appendChild(innerText);
  innerDiv.appendChild(closeText);
  outerDiv.appendChild(innerDiv);
  docFrag.appendChild(outerDiv);
  document.body.appendChild(docFrag);

  window.addEventListener("click", removeModal);
}

const ccForm = document.getElementById('ccForm');

ccForm.addEventListener('submit', (e) => {
  e.preventDefault();
  createModal();
});

