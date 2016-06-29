window.onload = function(){

// Get the modal
var modal = document.getElementById('receipt_modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('receipt_image');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}