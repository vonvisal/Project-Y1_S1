
//====================search=========================
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("keyup", function () {
        const filter = searchInput.value.toLowerCase();
        const rows = document.querySelectorAll("tbody tr");
        rows.forEach(function (row) {
            const text = row.textContent.toLowerCase();

            if (text.includes(filter)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});


//====================upload image =========================
const imagePreview = document.getElementById("imagePreview");
const imageUpload = document.getElementById("imageUpload");
const uploadText = document.getElementById("uploadText");

imagePreview.addEventListener("click", function () {
    imageUpload.click();
});

imageUpload.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            imagePreview.style.backgroundImage = `url(${e.target.result})`;
            imagePreview.style.backgroundSize = "cover";
            imagePreview.style.backgroundPosition = "center";
            uploadText.style.display = "none";
        };

        reader.readAsDataURL(file);
    }
});

