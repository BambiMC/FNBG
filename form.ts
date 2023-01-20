const form = document.querySelector<HTMLFormElement>("messsaginForm");

form?.addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const message = formData.get("message");
  console.log(message);
});
