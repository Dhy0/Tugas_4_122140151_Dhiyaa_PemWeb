document
  .getElementById("registrationForm")
  .addEventListener("submit", function (e) {
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];

    if (file && file.size > 2 * 1024 * 1024) {
      alert("File terlalu besar. Maksimal 2MB.");
      e.preventDefault();
    }
  });
